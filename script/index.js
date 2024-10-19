const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

let msghide = document.getElementById("msg");
let hide = document.getElementById("close");
let hidestyle = msghide;

hide.addEventListener("click", msg);

function msg() {
  hidestyle.remove();
}

let menShoesItems = document.getElementById("menShoesItems");

function listItems() {
  menShoesItems.style.display = "inline-block";
}

// accounts list script

let accountList = document.getElementById("accountList");
let account = document.getElementById("account");

document.addEventListener('click', (e)=>{
  if(!accountList.contains(e.target) && e.target !== account){
    accountList.style.display = "none";
  }
});

function showAccountList() {
  accountList.style.display = "inline-block";
}

// accounts list script end

function hideListItems() {
  menShoesItems.style.display = "none";
}

let colTwo = document.getElementById("colTwo");
let colThree = document.getElementById("colThree");
let col = document.getElementById("col");
let col2 = document.getElementById("col2");
let col3 = document.getElementById("col3");
let col4 = document.getElementById("col4");
let col5 = document.getElementById("col5");
let col6 = document.getElementById("col6");
let col7 = document.getElementById("col7");
let col8 = document.getElementById("col8");
let col9 = document.getElementById("col9");
let col10 = document.getElementById("col10");
let col11 = document.getElementById("col11");
let col12 = document.getElementById("col12");

colTwo.addEventListener("click", changeTwo);

function changeTwo() {
  col.classList.remove("col-lg-3");
  col.classList.add("col-lg-4");
  col2.classList.remove("col-lg-3");
  col2.classList.add("col-lg-4");
  col3.classList.remove("col-lg-3");
  col3.classList.add("col-lg-4");
  col4.classList.remove("col-lg-3");
  col4.classList.add("col-lg-4");
  col5.classList.remove("col-lg-3");
  col5.classList.add("col-lg-4");
  col6.classList.remove("col-lg-3");
  col6.classList.add("col-lg-4");
  col7.classList.remove("col-lg-3");
  col7.classList.add("col-lg-4");
  col8.classList.remove("col-lg-3");
  col8.classList.add("col-lg-4");
  col9.classList.remove("col-lg-3");
  col9.classList.add("col-lg-4");
  col10.classList.remove("col-lg-3");
  col10.classList.add("col-lg-4");
  col11.classList.remove("col-lg-3");
  col11.classList.add("col-lg-4");
  col12.classList.remove("col-lg-3");
  col12.classList.add("col-lg-4");
}

colThree.addEventListener("click", changeThree);

function changeThree() {
  col.classList.remove("col-lg-3");
  col.classList.remove("col-lg-4");
  col.classList.add("col-lg-2");
  col2.classList.remove("col-lg-3");
  col2.classList.remove("col-lg-4");
  col2.classList.add("col-lg-2");
  col3.classList.remove("col-lg-3");
  col3.classList.remove("col-lg-4");
  col3.classList.add("col-lg-2");
  col4.classList.remove("col-lg-3");
  col4.classList.remove("col-lg-4");
  col4.classList.add("col-lg-2");
  col5.classList.remove("col-lg-3");
  col5.classList.remove("col-lg-4");
  col5.classList.add("col-lg-2");
  col6.classList.remove("col-lg-3");
  col6.classList.remove("col-lg-4");
  col6.classList.add("col-lg-2");
  col7.classList.remove("col-lg-3");
  col7.classList.remove("col-lg-4");
  col7.classList.add("col-lg-2");
  col8.classList.remove("col-lg-3");
  col8.classList.remove("col-lg-4");
  col8.classList.add("col-lg-2");
  col9.classList.remove("col-lg-3");
  col9.classList.remove("col-lg-4");
  col9.classList.add("col-lg-2");
  col10.classList.remove("col-lg-3");
  col10.classList.remove("col-lg-4");
  col10.classList.add("col-lg-2");
  col11.classList.remove("col-lg-3");
  col11.classList.remove("col-lg-4");
  col11.classList.add("col-lg-2");
  col12.classList.remove("col-lg-3");
  col12.classList.add("col-lg-2");
  col12.classList.remove("col-lg-4");
}
