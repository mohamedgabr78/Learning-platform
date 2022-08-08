let xhr = new XMLHttpRequest();
xhr.open("GET", "../backend/course.php", true);
xhr.onload = () => {
  if (xhr.status === 200) {
    console.log(xhr.response);
    // const course = JSON.parse(xhr.response);
  }
};

xhr.send();
