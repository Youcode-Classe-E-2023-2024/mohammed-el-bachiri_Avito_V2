const p = document.querySelectorAll('p');
const d = document.querySelectorAll('div#divv div');

function lowerOpacity() {
    p.forEach((element)=>{
        element.style.opacity = '.7';
        element.style.background = 'none';
    });
}
lowerOpacity();
function hideDivs() {
    d.forEach((div) => {
        div.style.display = 'none';
    });
}
hideDivs();
d[0].style.display = 'block';
p[0].style.backgroundColor = 'rgb(8 47 73)';
p[0].style.opacity = '1';
p.forEach((ele)=>{
    ele.addEventListener('click', () => {
        lowerOpacity();
        ele.style.opacity = '1';
        ele.style.backgroundColor = 'rgb(8 47 73)';

        switch (ele) {
            case ele = p[0]:
                hideDivs();
                d[0].style.display = 'block';
                break;

            case ele = p[1]:
                hideDivs();
                d[1].style.display = 'block';
                break;

            case ele = p[2]:
                hideDivs();
                d[2].style.display = 'block';
                break;
        }
    });
})