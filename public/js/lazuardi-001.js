// trix editor
document.addEventListener('trix-file-accept', function (e) {
  e.preventDefault()
})

// image preview
function previewImage() {
  const image = document.querySelector('#image')
  const imgPreview = document.querySelector('.img-preview')

  imgPreview.style.display = 'block'

  const oFReader = new FileReader()
  oFReader.readAsDataURL(image.files[0])

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result
  }
}

// slug
const title = document.querySelector('#title')
const slug = document.querySelector('#slug')

title.addEventListener('change', function () {
  fetch('/dashboard/post/checkSlug?title=' + title.value)
    .then((response) => response.json())
    .then((data) => (slug.value = data.slug))
})

// slug alternatif`
// const title = document.querySelector("#title");
//   const slug = document.querySelector("#slug");

//   title.addEventListener("change", function() {
//       let preslug = title.value;
//       preslug = preslug.replace(/ /g,"-");
//       slug.value = preslug.toLowerCase();
//   });
