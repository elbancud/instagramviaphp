const fileUpload2 = document.getElementById("fileUpload2");



fileUpload2.addEventListener("click", (event) => {
    
    if (fileUpload2.files[0] == undefined) {
        alert("Please choose a file");
        event.preventDefault();
    } else if (fileUpload2.files[0].size > 500000) {
        alert("Image should be maximum of 5mb ");
        event.preventDefault();
       
    } else {
        
    }
});
