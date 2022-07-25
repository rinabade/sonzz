// function click(){
// let left_scroll = document.getElementById('left_scroll');
// let right_scroll = document.getElementById('right_scroll');
// let pop_song = document.getElementByClassName('pop_song')[0];

// left_scroll.addEventListener('click', ()=>{
//     pop_song.scrollLeft -= 330;
// })
// right_scroll.addEventListener('click', ()=>{
//     pop_song.scrollLeft += 330;
// })
// }


const left_scroll = document.querySelector('#left_scroll');
const right_scroll = document.querySelector('#right_scroll');
const pop_song = document.querySelector('.pop_song');

left_scroll.addEventListener('click', () => {
    pop_song.scrollLeft -= 330;
});

right_scroll.addEventListener('click', () => {
    pop_song.scrollLeft += 330;
});