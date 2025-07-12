const name = document.getElementById("name");
const nim = document.getElementById("nim");
const prodi = document.getElementById("prodi");
const genderMale = document.getElementById("male");
const genderFemale = document.getElementById("female");
const greeting1 = document.getElementById("greeting1");
const greeting2 = document.getElementById("greeting2");
const purpose = document.getElementById("purpose");
const ask = document.getElementById("ask");
const place = document.getElementById("place");
const day = document.getElementById("day");
const time = document.getElementById("time");
const generateBtn = document.getElementById("generateBtn");
const BASEURL = document
  .querySelector('meta[name="baseurl"]')
  .getAttribute("content");

let genderVal = genderMale.value;
const gender = document.querySelectorAll("input[name='gender']");
gender.forEach((radio) => {
  radio.addEventListener("change", (e) => {
    genderVal = e.target.value;
  });
});

const greetingWrapper1 = document.getElementById("greetingWrapper1");
const greetingWrapper2 = document.getElementById("greetingWrapper2");
let greetingVal = greeting2.value;
greeting1.addEventListener("change", () => {
  if (greeting1.checked) {
    greetingWrapper2.style.display = "none";
    greetingVal = greeting1.value;
  } else {
    greetingWrapper2.style.display = "block";
    greetingVal = greeting2.value;
  }
});
greeting2.addEventListener("change", () => {
  greetingVal = greeting2.value;
});

const askWrapper = document.getElementById("askWrapper");
const reminderWrapper = document.getElementById("reminderWrapper");
reminderWrapper.style.display = "none";

purpose.addEventListener("change", (e) => {
  if (e.target.value == "Bertanya") {
    askWrapper.style.display = "block";
    reminderWrapper.style.display = "none";
  } else {
    reminderWrapper.style.display = "block";
    askWrapper.style.display = "none";
  }
});

let formValue = {};

let content = document.querySelector(".scrollable-content");

generateBtn.addEventListener("click", () => {
  formValue.name = name.value;
  formValue.nim = nim.value;
  formValue.prodi = prodi.value;
  formValue.gender = genderVal;
  formValue.greeting = greetingVal;
  formValue.purpose = purpose.value;
  if (purpose.value == "Bertanya") {
    formValue.ask = ask.value;
  } else {
    formValue.place = place.value;
    formValue.day = day.value;
    formValue.time = time.value;
  }

  let empty = false;

  for (key in formValue) {
    if (formValue[key] == "") {
      document.getElementById(key).classList.add("is-invalid");
      empty = true;
    }
  }

  if (!empty) {
    document.querySelector(".chat_dosen_generator-wrapper").style.height =
      "100%";
    content.innerHTML = `<div class="d-flex justify-content-center align-items-center h-100 w-100 p-5">
                            <h3 class="fw-bold text-center">Tunggu sebentar yah...</h3>
                        </div>`;

    fetch(`${BASEURL}ChatDosenGenerator/generateChat`, {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: JSON.stringify(formValue),
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error("Terjadi kesalahan " + response.status);
        }
        return response.text();
      })
      .then((responseData) => {
        let teks = responseData.replace(/^\d+\.\s/gm, "");
        const kalimat = teks.split("\n"); // Memisahkan teks menjadi array kalimat berdasarkan baris baru
        let string = "";

        kalimat.forEach((kalimat) => {
          if (kalimat.trim().length != 0) {
            string += `<li>${kalimat}</li>`;
          }
        });

        document.querySelector(".chat_dosen_generator-wrapper").style.height =
          "auto";
        content.innerHTML = `<ul>${string}</ul>`;
        document.getElementById("generateAgain").classList.remove("d-none");
        document.getElementById("generateAgain").classList.add("d-flex");
      });
  }
});
