document.addEventListener('DOMContentLoaded', function(){
    const fileInput = document.getElementById('inputGroupFile04');
    const ShowImage = document.getElementById('selectedImage');

    fileInput.addEventListener('change', function(){
        const file = fileInput.files; //đường link file sẽ trả về mảng 
       
        if(file.length > 0){
            const NewImage = document.createElement('img');
            NewImage.src = URL.createObjectURL(file[0]);
            NewImage.style.maxWidth = "100%"; // thiết kế cho hình ảnh 100%
            //Xóa hình ảnh trước nếu có tồn tại
            ShowImage.innerHTML = "";
            // thêm hình ảnh vào thẻ Div
            ShowImage.appendChild(NewImage);
        }else{

            ShowImage.innerHTML = ""
        }
    });
});

