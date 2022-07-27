

const leftScroll = document.querySelectorAll('.left_scroll');
const rightScroll = document.querySelectorAll('.right_scroll');
const pop_song = document.querySelectorAll('.pop_song');

leftScroll[0].addEventListener('click', () => {
    pop_song[0].scrollLeft -= 350;
});

leftScroll[1].addEventListener('click', () => {
    pop_song[1].scrollLeft -= 350;
});

leftScroll[2].addEventListener('click', () => {
    pop_song[2].scrollLeft -= 350;
});

rightScroll[0].addEventListener('click', () => {
    pop_song[0].scrollLeft += 350;
});

rightScroll[1].addEventListener('click', () => {
    pop_song[1].scrollLeft += 350;
});

rightScroll[2].addEventListener('click', () => {
    pop_song[2].scrollLeft += 350;
});

