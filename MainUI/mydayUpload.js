const fileProfileUpload = document.getElementById("fileProfileUpload");



uploadProfile.addEventListener("click", (event) => {
    
    if (fileProfileUpload.files[0] == undefined) {
        alert("Please choose a file");
        event.preventDefault();
    } else if (fileProfileUpload.files[0].size > 500000) {
        alert("Image should be maximum of 5mb ");
        event.preventDefault();
       
    } else {
        
    }
});
