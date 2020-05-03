// const searchBar = document.form['search-books'].querySelector('input');
// searchBar.addEventListener('keyup', function(e){
//     const term = e.target.value.toLowerCase()
//     const books = list.getElementByTagName('li');
//     Array.from(books).forEach(function(books){
//         const title = book.firstElementChild.textContent;
//         if(title.toLowerCase().indexOf(term)!=-1){
//             book.style.display='block';
//         } else {
//             book.style.display='none';
//         }
//     })
// })

function filter() {

    var filterValue, input, ul, li, a, i;
    input = document.getElementById("search");
    filterValue = input.value.toUpperCase();
    ul = document.getElementById("menu");
    li = ul.getElementsByTagName("li");

    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filterValue) > -1) {
            li[i].style.display = "";

        } else {
            li[i].style.display = "none";
        }
    }
}

function filter() {

    var filterValue, input, tr, td, a, i;
    input = document.getElementById("search");
    filterValue = input.value.toUpperCase();
    tr = document.getElementById("Menu");
    td = tr.getElementsByTagName("td");

    for (i = 0; i < td.length; i++) {
        a = td[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filterValue) > -1) {
            td[i].style.display = "";

        } else {
            td[i].style.display = "none";
        }
    }
}