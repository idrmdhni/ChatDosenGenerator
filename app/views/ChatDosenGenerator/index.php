<div class="container-fluid p-0 p-md-5 vh-100">
    <div class="chat_dosen_generator-wrapper shadow">
        <header class="row w-100 justify-content-center">
            <div class="col-auto">
                <h1 class="fw-bold">Chat Dosen Generator</h1>
                <div class="text-center">By <strong>Indra</strong></div>
                <div class="d-none justify-content-center mt-3" id="generateAgain">
                    <a href="<?= BASEURL ?>" class="btn btn-primary">Hasilkan Ulang</a>
                </div>
            </div>
        </header>
        <div class="chat_dosen_generator-content">
            <div class="row w-100 justify-content-center">
                <div class="col-11 col-md-10 scrollable-content">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM:</label>
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Prodi:</label>
                        <input type="text" class="form-control" id="prodi" name="prodi">
                    </div>
                    <div class="mb-3 row">
                        <span class="col-auto">Jenis Kelamin Dosen: </span>
                        <div class="form-check col-12 col-sm-auto ms-3 ms-sm-0">
                            <input class="form-check-input" type="radio" name="gender" value="laki-laki" id="male" checked>
                            <label class="form-check-label" for="male">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check col-12 col-sm-auto ms-3 ms-sm-0">
                            <input class="form-check-input" type="radio" name="gender" value="perempuan" id="female">
                            <label class="form-check-label" for="female">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="row mb-3" id="greetingWrapper1">
                        <div class="col-auto">Gunakan Assalamualaikum</div>
                        <span class="form-check form-switch col-auto ms-3 ms-sm-0">
                            <input type="checkbox" class="form-check-input" id="greeting1" value="Assalamualaikum">
                            <label for="greeting1" class="form-check-label"></label>
                        </span>
                    </div>
                    <div class="mb-3" id="greetingWrapper2">
                        <label for="greeting2" class="form-label">Waktu Sapaan:</label>
                        <select class="form-select" id="greeting2">
                            <option value="Selamat Pagi">Pagi</option>
                            <option value="Selamat Siang">Siang</option>
                            <option value="Selamat Sore">Sore</option>
                            <option value="Selamat Malam">Malam</option>
                        </select>
                    </div>
                    <div class="mb-3 purpose">
                        <label for="purpose" class="form-label">Tujuan:</label>
                        <select class="form-select form-select" id="purpose">
                            <option value="Bertanya" selected>Bertanya</option>
                            <option value="Mengingatkan waktu perkuliahan berdasarkan hari perkuliahan">Mengingatkan waktu perkuliahan</option>
                        </select>
                    </div>
                    <div class="mb-3 ask" id="askWrapper">
                        <label for="ask" class="form-label">Pertanyaan:</label>
                        <textarea type="text" class="form-control" id="ask"></textarea>
                    </div>
                    <div id="reminderWrapper">
                        <div class="mb-3 place">
                            <label for="place" class="form-label">Tempat:</label>
                            <input type="text" class="form-control" id="place">
                        </div>
                        <div class="mb-3 day">
                            <label for="day" class="form-label">Hari:</label>
                            <select class="form-select" id="day">
                                <option value="Hari ini" selected>Hari ini</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="time" class="form-label">Waktu:</label>
                            <input type="time" class="form-control" id="time">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary" id="generateBtn">Hasilkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="d-flex justify-content-center align-items-center">
    <h3 class="fw-bold">Tunggu sebentar yah...</h3>
</div> -->