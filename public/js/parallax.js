const lazyImages = document.querySelectorAll('img[data-src]');
const windowHeight = document.documentElement.clientHeight;
const loadMoreBlock = document.querySelectorAll('_load-more');

let lazyImagesPositions = [];
if (lazyImages.length > 0) {
    lazyImages.forEach(img => {
        if (img.dataset.src) {
            lazyImagesPositions.push(img.getBoundingClientRect().top + pageYOffset);
        }
    });

}

window.addEventListener('scroll', lazyScroll);

function lazyScroll() {
    if (document.querySelectorAll('img[data-src]').length > 0) {
        lazyScrollChek();
    }
}


function lazyScrollChek() {
    let imgIndex = lazyImagesPositions.findIndex(
        item => pageYOffset > item - windowHeight
    );
    if (imgIndex >= 0) {
        if (lazyImages[imgIndex].dataset.src) {
            lazyImages[imgIndex].src = lazyImages[imgIndex].dataset.src;
            lazyImages[imgIndex].removeAttribute('data-src');
        }

        delete lazyImagesPositions[imgIndex];

    }
}



function loadMore() {
    loadMoreBlockPos = loadMoreBlock.getBoundingClientRect().top + pageYOffset;
    loadMoreBlockHeight = loadMoreBlock.offsetHeight;

    if (pageYOffset > (loadMoreBlockPos + loadMoreBlockHeight) - windowHeight) {
        getContent();
    }
}

async function getContent() {

}

$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('#scroller').fadeIn();
        } else {
            $('#scroller').fadeOut();
        }
    });
    $('#scroller').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});