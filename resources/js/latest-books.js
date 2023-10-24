const list = document.querySelector("#latest-books");
const loader = document.querySelector(".loader");
const modal = document.querySelector(".modal");

function apiCall() {
  loader.style.display = "block";
  try {
    fetch(
      "https://classes.codingbootcamp.cz/assets/classes/books-api/latest-books.php"
    )
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        console.log(data);
        setTimeout(() => {
          data ? (loader.style.display = "none") : "";
          data.forEach((el) => {
            modal.innerHTML = el.authors[0].bio;
            list.innerHTML += `<div class='book-box'>
          <div class='image'>
            <img src="${el.image}">
          </div>
             <p class='author'><i>By ${el.authors[0].name}</i></p>
             <p>Title: <strong> ${el.title}</strong></p>
             <p>Publication date <i> ${el.publication_date}</i></p>
             <div class='description'>
              ${el.description}
             </div>
          </div>`;
          });
        }, 1000);
      });
  } catch (error) {
    loader.style.display = "none";
    console.log("Something went wrong.", error);
  }
}

apiCall();
