let sub = document.getElementById('sub');
let btnMore = document.getElementById('btn-more');
btnMore.addEventListener('click',()=>{
    alert("Sorry not available");
})
sub.addEventListener('click',()=>{
    alert("Thanks for subscribed!")
    sub.innerHTML = "subscribed.";
})

let topBtn = document.getElementById('topBtnbar');

topBtn.addEventListener('click',()=>{
    window.location= 'topup.html';
})