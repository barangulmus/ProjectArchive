let downloadXpath;
const expand_btn = document.querySelector(".expand-btn");
const img = expand_btn.querySelector("heade img");
expand_btn.addEventListener("click", () => {
  document.body.classList.toggle("collapsed");
});

const current = window.location.href;

const allLinks = document.querySelectorAll(".sidebar-links tooltip");

allLinks.forEach((elem) => {
  elem.addEventListener('click', function() {
    const hrefLinkClick = elem.href;

    allLinks.forEach((link) => {
      if (link.href == hrefLinkClick){
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
document.getElementById("downloadLink").addEventListener("click", function() {
    this.href=downloadXpath;
});
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

// İptal butonuna tıklanınca tetiklenecek olan fonksiyon
dropzoneBox.addEventListener("reset", (e) => {
  let dropzoneFileMessage = dropZoneElement.querySelector(".message");

  dropzoneFileMessage.innerHTML = `No Files Selected`;
});

// Kaydet butonuna tıklanınca tetiklenecek olan fonksiyon
document.querySelector('.dropzone-box').addEventListener("submit", (e) => {
  e.preventDefault(); // Formun varsayılan davranışını engelle

  const formData = new FormData();
  const files = document.getElementById("upload-file").files;

  for (let i = 0; i < files.length; i++) {
    formData.append("file[]", files[i]);
  }

  fetch('upload.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    console.log(data); // PHP tarafından dönen veriyi konsola yazdır
  })
  .catch(error => {
    console.error(error);
  });
});
