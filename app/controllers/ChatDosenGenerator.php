<?php

class ChatDosenGenerator extends Controller
{
    public function index()
    {
        $data['page-title'] = "Chat Dosen Generator";

        $this->view('templates/header', $data);
        $this->view('ChatDosenGenerator/index');
        $this->view('templates/footer');
    }

    public function generateChat()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $jsonData = file_get_contents("php://input");
            $data = json_decode($jsonData, true);
            $prompt = "";
            if ($data['purpose'] == "Bertanya") {
                $prompt = "Buat kalimat untuk menghubungi dosen melalui chat dengan bahasa yang sopan dan jelas agar pokok bahasan tersampaikan dengan baik, hindari pemborosan kata seperti memanggil (pak/bu) secara berlebihan. Berikut adalah data yang diberikan untuk merangkai kalimat:
                            Nama Mahasiswa: {$data['name']},
                            Nomor Induk Mahasiswa (NIM): {$data['nim']},
                            Program Studi: {$data['prodi']},
                            Jenis Kelamin Dosen: {$data['gender']},
                            Salam yang Digunakan untuk Menyapa: {$data['greeting']},
                            Tujuan: {$data['purpose']},
                            Pertanyaan: {$data['ask']}. Berikan 5 opsi pilihan kalimat. Jawaban yang diberikan langsung opsi kalimatnya saja tidak perlu menyebutkan alasan, tips, dan lain sebagainya, hilangkan juga jawaban pembuka seperti 'Berikut 5 opsi kalimat untuk menghubungi dosen melalui chat'  dan sejenisnya. Berikan opsi pilihan kalimat dengan nomor. Berikan perkenalan yang lengkap akan tetapi tidak telalu panjang, bergitu juga dengan penyampaian alasan untuk menghubungi dosen tersebut.";
            } else {
                $prompt = "Buat kalimat untuk menghubungi dosen melalui chat dengan bahasa yang sopan dan jelas agar pokok bahasan tersampaikan dengan baik, hindari pemborosan kata seperti memanggil (pak/bu) secara berlebihan. Berikut adalah data yang diberikan untuk merangkai kalimat:
                            Nama Mahasiswa: {$data['name']},
                            Nomor Induk Mahasiswa (NIM): {$data['nim']},
                            Program Studi: {$data['prodi']},
                            Jenis Kelamin Dosen: {$data['gender']},
                            Salam yang Digunakan untuk Menyapa: {$data['greeting']},
                            Tujuan: {$data['purpose']},
                            Tempat Perkuliahan: {$data['place']}, 
                            Hari Perkuliahan: {$data['day']}, 
                            Jam Perkuliahan: {$data['time']}. Berikan 5 opsi pilihan kalimat. Jawaban yang diberikan langsung opsi kalimatnya saja tidak perlu menyebutkan alasan, tips, dan lain sebagainya, hilangkan juga jawaban pembuka seperti 'Berikut 5 opsi kalimat untuk menghubungi dosen melalui chat' dan sejenisnya. Berikan opsi pilihan kalimat dengan nomor. Berikan perkenalan yang lengkap akan tetapi tidak telalu panjang, bergitu juga dengan penyampaian alasan untuk menghubungi dosen tersebut.";
            }
            $apiKey = getEnvVar('API_KEY');
            $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=$apiKey";
            $response = $this->model("ChatDosenGenerator_model")->getCurl($url, $prompt);
            echo $response['candidates'][0]['content']['parts'][0]['text'];
        }
    }
}

?>