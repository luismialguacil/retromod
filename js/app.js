window.addEventListener('load', function () {
    [].forEach.call(document.querySelectorAll('.glider'), function (ele) {
        ele.addEventListener('glider-slide-visible', function (event) {
            var glider
                = Glider(this); console.log('Slide Visible %s', event.detail.slide)
        });
        ele.addEventListener('glider-slide-hidden', function (event) {
            console.log('Slide Hidden %s', event.detail.slide)
        });
        ele.addEventListener('glider-refresh', function (event) {
            console.log('Refresh')
        });
        ele.addEventListener('glider-loaded', function
            (event) {
                console.log('Loaded')
        });
        new Glider(ele, {
            slidesToShow: 2,
            slidesToScroll: 2,
            scrollLock: true,
            draggable: true,
            dots: ele.querySelector('.dots'),
            arrows: {
                prev: ele.querySelector('.glider-prev'),
                next: ele.querySelector('.glider-next')
            },
 responsive: [
                {
                    breakpoint: 800,
                    settings: {
                        slidesToScroll: 'auto',
                        itemWidth: 300,
                        slidesToShow: 'auto',
                        exactWidth: true
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        slidesToScroll: 3,
                        slidesToShow: 3,
                        dots: false,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToScroll: 3,
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToScroll: 2,
                        slidesToShow: 2,
                        dots: false,
                        arrows: false,
                        scrollLock: true
                    }
                }
            ]
        });
    });
});
      
      
      
      
      
     