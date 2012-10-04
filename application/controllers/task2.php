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

    public function post_main() {
        $data = json_decode(Input::get('data'));
        $img1 = $this->load_file($data[0]);
        $img2 = $this->load_file($data[1]);
        echo $img1.' and '.img2;
        return;
        $diff = new Imagediff($img1, $img2);
        $koef = $diff->diff() >= 0.6 ? 1 : 0;
        return Response::make($koef)->header('Content-Type', 'text/plain');
    }
}