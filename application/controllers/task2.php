<?php

class Task2_Controller extends Base_Controller {

    const HTTP_FIX = "http://";
    const LOCAL_STORE = "/public/img/upload/";
    public $restful = true;

    private function localfname($url) {
        $path = parse_url($url, PHP_URL_PATH);
        $fname = pathinfo($path, PATHINFO_BASENAME);
        return getcwd().self::LOCAL_STORE.$fname; 
    }

    private function load_file0($url) {
        $result = false;
        $newfname = $this->localfname($url);
        $hfile = fopen(self::HTTP_FIX.$url, 'rb');
        if ($hfile) {
            $hnew = fopen($newfname, 'wb');
            if ($hnew) {
                while (!feof($hfile)) {
                    fwrite($hnew, fread($hfile, 1024*8), 1024*8);
                }
                fclose($hnew);
                $result = $newfname;
            }
            fclose($hfile);
        }
        return $result;
    }

    private function load_file($url) {
        $result = false;
        $path = $this->localfname($url);

        $fp = fopen($path, 'w');
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        if (curl_exec($ch) !== false) {
            $result = $path;
        }
        curl_close($ch);
        fclose($fp);

        return $result;
    }

    private function remove_files(array $list) {
        foreach ($list as $path) {
            if (is_readable($path)) {
                unlink($path);
            }
        }
    }

    public function post_main() {
        $data = json_decode(Input::get('data'));

        $img1 = $this->load_file($data[0]);
        $img2 = $this->load_file($data[1]);

        $diff = new Imagediff($img1, $img2);
        $koef = $diff->diff() < 1 ? 0 : 1;

        $this->remove_files(array($img1, $img2));

        return Response::make($koef)->header('Content-Type', 'text/plain');
    }

    public function post_main1() {
        $img1 = new Imagick(Input::get('img1'));
        $img2 = new Imagick(Input::get('img2'));

        $result = $img1->compareImages($img2, Imagick::METRIC_MEANSQUAREERROR);
        $result[0]->setImageFormat("png");

        return Response::make($result[0])->header('Content-Type', 'image/png');
    }
}