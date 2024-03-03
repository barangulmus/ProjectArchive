let downloadXpath;
const expand_btn = document.querySelector(".expand-btn");
const img = expand_btn.querySelector("heade img");
expand_btn.addEventListener("click", () => {
  document.body.classList.toggle("collapsed");
});

const current = window.location.href;

const allLinks = document.querySelectorAll(".sidebar-links tooltip");

allLinks.forEach((elem) => {
  elem.addEventListener('click', function () {
    const hrefLinkClick = elem.href;

    allLinks.forEach((link) => {
      if (link.href == hrefLinkClick) {
        link.classList.add("active");
      } else {
        link.classList.remove('active');
      }
    });
  })
});

const mainItems = document.querySelectorAll(
  '.main-item'
);

mainItems.forEach((mainItem) => {
  mainItem.addEventListener('click', () => {
    mainItem.classList.toggle(
      'main-item--open'
    );
  })
});
document.getElementById("downloadLink").addEventListener("click", function () {
  this.href = downloadXpath;
});


/*////////////////////////////////////////////////////////////////////////////////*/
/*////////////////////////////////////////////////////////////////////////////////*/
/*////////////////////////////////////////////////////////////////////////////////*/
document.getElementById("closeforms").addEventListener("click", function () {
  // document.getElementById("positionMiddleDiv").style.opacity = "0";
  // document.getElementById("positionMiddleDiv").style.pointerEvents = "none";
  document.getElementById("positionMiddleDiv").style = "opacity: 0; pointer-events:none;";
});
/*////////////////////////////////////////////////////////////////////////////////*/
/*////////////////////////////////////////////////////////////////////////////////*/
document.getElementById("addFileCard").addEventListener("click", function () {
  // document.getElementById("positionMiddleDiv").classList.add("animate__animated animate__bounceIn");
  document.getElementById("positionMiddleDiv").style = "opacity: 1; pointer-events:all;";
});
/*////////////////////////////////////////////////////////////////////////////////*/
/*////////////////////////////////////////////////////////////////////////////////*/
document.getElementById("channeluploadButton").addEventListener("click", function () {
  document.getElementById("positionMiddleDiv").style = "opacity: 0; pointer-events:none;";
});
/*////////////////////////////////////////////////////////////////////////////////*/
/*////////////////////////////////////////////////////////////////////////////////*/
/*////////////////////////////////////////////////////////////////////////////////*/

// Dosya yükleme alanındaki input elementlerini seçer
const inputFiles = document.querySelectorAll(
  ".dropzone-area input[type='file']"
);

// İlk input elementini seçer
const inputElement = inputFiles[0];

// Dosya yükleme alanının bulunduğu elementi seçer
const dropZoneElement = inputElement.closest(".dropzone-area");

// Dosya seçildiğinde tetiklenecek olan fonksiyon
inputElement.addEventListener("change", (e) => {
  if (inputElement.files.length) {
    updateDropzoneFileList(dropZoneElement, inputElement.files[0]);
  }
});

// Dosya sürüklenirken üzerine gelindiğinde tetiklenecek olan fonksiyon
dropZoneElement.addEventListener("dragover", (e) => {
  e.preventDefault();
  dropZoneElement.classList.add("dropzone--over");
});

// Dosya sürükleme işlemi bırakıldığında tetiklenecek olan fonksiyon
["dragleave", "dragend"].forEach((type) => {
  dropZoneElement.addEventListener(type, (e) => {
    dropZoneElement.classList.remove("dropzone--over");
  });
});

// Dosya sürükleme işlemi bırakıldığında tetiklenecek olan fonksiyon
dropZoneElement.addEventListener("drop", (e) => {
  e.preventDefault();

  if (e.dataTransfer.files.length) {
    inputElement.files = e.dataTransfer.files;

    updateDropzoneFileList(dropZoneElement, e.dataTransfer.files[0]);
  }

  dropZoneElement.classList.remove("dropzone--over");
});

// Dosya listesini güncelleyen fonksiyon
const updateDropzoneFileList = (dropzoneElement, file) => {
  let dropzoneFileMessage = dropzoneElement.querySelector(".message");

  dropzoneFileMessage.innerHTML = `
        ${file.name}, ${file.size} bytes
    `;
};

// Kaydet butonuna tıklanınca tetiklenecek olan fonksiyon
document.getElementById("submit-button").addEventListener("click", function () {
  let fileName, xzy;
  let fileNameLet = document.getElementById("filenameID");
  let fileXpathLet = document.getElementById("openPageFileName");
  // Radio button elementlerini al
  const ButtonRadioButton = document.getElementById('a');
  const CardRadioButton = document.getElementById('b');
  const AccordionRadioButton = document.getElementById('c');
  const AnimationRadioButton = document.getElementById('d');
  const DropdownRadioButton = document.getElementById('e');
  const FooterRadioButton = document.getElementById('f');

  // Radio button'ların checked durumunu kontrol et
  const ButtonChecked = ButtonRadioButton.checked;
  const CardChecked = CardRadioButton.checked;
  const AccordionChecked = AccordionRadioButton.checked;
  const AnimationChecked = AnimationRadioButton.checked;
  const DropdownChecked = DropdownRadioButton.checked;
  const FooterChecked = FooterRadioButton.checked;

  // Duruma göre işlem yap
  if (ButtonChecked) {
    fileName = document.querySelector("li#ButtonsLi div ul");
    xzy = "buttons"
  } else if (CardChecked) {
    fileName = document.querySelector("li#CardsLi div ul");
    xzy = "cards"
  } else if (AccordionChecked) {
    fileName = document.querySelector("li#AccordionsLi div ul");
    xzy = "accordions"
  } else if (AnimationChecked) {
    fileName = document.querySelector("li#AnimationsLi div ul");
    xzy = "animations"
  } else if (DropdownChecked) {
    fileName = document.querySelector("li#DropdownsLi div ul");
    xzy = "dropdowns"
  } else if (FooterChecked) {
    fileName = document.querySelector("li#FootersLi div ul");
    xzy = "footers"
  } else {
    alert("Lütfenn boş alan bırakmadığınızdan ve türkce karakter kullanmadıgınızdan emin olunuz.")
  }
// 'message' class'ına sahip tüm elementleri seç
var elementler = document.getElementsByClassName("message");

// İlk elemanı al (varsayılan olarak)
var metin = elementler[0].textContent;

// İlk elemanın metninde '.zip' olan son indeksi al
var sonIndex = metin.indexOf('.zip');

// 'class="message">' ifadesini aramaya başlamak için başlangıç indexi
var baslangicIndex = metin.lastIndexOf('>', sonIndex) + 1;

// Başlangıç indexinden son indexe kadar olan kısmı al, yani 'x.zip' kısmını.
var zipDosyasiAdi = metin.substring(baslangicIndex, sonIndex).trim();

console.log(zipDosyasiAdi);

  dosyayolu = 
  `<li>
      <div class="line-vertical"></div>
      <div class="line-horizontal"></div>
      <a href="javascript:void(0)"
        onclick="document.getElementById('iframeId').src = 'archive/${xzy}/${fileNameLet.value}/${zipDosyasiAdi}/${fileXpathLet.value}';
        downloadXpath='downloadFolder/${zipDosyasiAdi}.zip'">
        ${fileNameLet.value}
      </a>
    </li>`;
  fileName.insertAdjacentHTML("beforeend", dosyayolu);
});
