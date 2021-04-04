const post = document.getElementById("post");
const caption = document.getElementById("caption");
const file = document.getElementById("fileUpload");
const form = document.getElementById("form");
const title = document.getElementById("uploadTitle");



post.addEventListener("click", (event) => {
    
    if (caption.value == "" || file.files[0] === undefined) {
        alert("Please enter a caption and upload a file");
        event.preventDefault();
    } else if (file.files[0].size > 500000) {
        alert("Image should be maximum of 5mb ");
        event.preventDefault();
       
    } 
});

