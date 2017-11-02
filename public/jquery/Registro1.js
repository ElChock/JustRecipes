$('input').change(function(){
  if (this.files && this.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        selectedImage = e.target.result;
        $('#avatar').attr('src', selectedImage);
    };
    reader.readAsDataURL(this.files[0]);
  }
});