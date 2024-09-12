$(document).ready(function() {

    $('select').customSelect();


    //_______DROPDOWN MENU__________

    $('.header-bot__menu-item').click(function(e) {
        e.preventDefault()
        if(!$(e.target).parents('.submenu').length) {
            $('.overlay').show()
            $('.submenu').hide()
            $(this).parent().find('.submenu').show()
            $('body').addClass('overflowH')
        }
    })

    $('.submenu__close').click(function() {
        $('.overlay').hide()
        $('body').removeClass('overflowH')
        $(this).parents('.submenu').hide()
    })

    $('.mobile-menu .menu__item-dropdown .submenu-open').click(function() {
        $(this).toggleClass('submenu-open__active')
        $(this).parents('.menu__item-dropdown').find('.submenu').slideToggle(400)
    })


    //______HEADER SEARCH_______


    let showSearch = false

    $('.header-search').click(function() {
        $('.header-menu .search-input input').show()
        setTimeout(() => {
            showSearch = true
        }, 100)
    })



    $('body').click(e => {
        if(showSearch) {
            let div = $('.header-menu .search-input input');
            if ((!div.is(e.target) 
                && div.has(e.target).length === 0) && !$(e.target).is('.header-search img')) { 
                $('.header-menu .search-input input').hide(); 
                showSearch = false
            }
        }
    })

    //_______MOBILE MENU__________

    $('.header-mobi').click(function() {
        $(this).toggleClass('header-mobi__open')
        $('body').toggleClass('overflowH')
        $('.mobile-menu').toggleClass('mobile-menu-open')
    })



    //______MAIN CAROUSEL__________

    $('.main-carousel').owlCarousel({
        dots: true,
        nav: false,
        mouseDrag: false,
        smartSpeed: 700,
        items: 1,
        loop: true,
        margin: 20,
        autoHeight: true,

    })
    

    //______PRODUCTS CAROUSEL__________

    $('.products-carousel').owlCarousel({
        dots: false,
        nav: false,
        mouseDrag: false,
        smartSpeed: 700,
        margin: 20,
        responsive: {
            0: {
                items: 1,
                center: true
            },
            600: {
                items: 2,
                margin: 20,
            },
            1000: {
                items: 3,
                margin: 30,
            }
        }
    })


    $('.products-business-carousel').owlCarousel({
        dots: false,
        nav: false,
        mouseDrag: false,
        smartSpeed: 700,
        margin: 20,
        responsive: {
            0: {
                items: 1,
                center: true
            },
            900: {
                items: 2,
                margin: 20,
            },
        }
    })

    $('.products-carousel__arrows .arrow-left').click(() => {
        $('.products-carousel').trigger('prev.owl.carousel', [700]);
     
    })
    
    $('.products-carousel__arrows .arrow-right').click(() => {
        $('.products-carousel').trigger('next.owl.carousel', [700]);  
    })

    $('.products-carousel__arrows .arrow-left').click(() => {
        $('.products-business-carousel').trigger('prev.owl.carousel', [700]);
     
    })
    
    $('.products-carousel__arrows .arrow-right').click(() => {
        $('.products-business-carousel').trigger('next.owl.carousel', [700]);  
    })


    //______BUSINESS CAROUSEL__________

    $('.business-carousel').owlCarousel({
        dots: false,
        nav: false,
        mouseDrag: false,
        smartSpeed: 700,
        margin: 20,
        responsive: {
            0: {
                items: 1,
                center: true
            },
            600: {
                items: 2,
                margin: 20,
            },
            1000: {
                items: 3,
                margin: 30,
            }
        }
    })

    $('.business-carousel__arrows .arrow-left').click(() => {
        $('.business-carousel').trigger('prev.owl.carousel', [700]);
    
    })

    $('.business-carousel__arrows .arrow-right').click(() => {
        $('.business-carousel').trigger('next.owl.carousel', [700]);  
    })



    //____RANGE SLIDERS__________

    function format(x) {
        var parts = x.toString().split(".");
        parts[0]=parts[0].replace(/\B(?=(\d{3})+(?!\d))/g," ");
        return parts.join(".");
    }


    $('.customRange input').map((index, item) => {
        let val = ($(item).val() - $(item).attr('min')) / ($(item).attr('max') - $(item).attr('min'));
        let percent = val * 100;
    
        $(item).css('background-image',
            '-webkit-gradient(linear, left top, right top, ' +
            'color-stop(' + percent + '%, #00B807), ' +
            'color-stop(' + percent + '%, #ECECEC)' +
            ')');
    
        $(item).css('background-image',
            '-moz-linear-gradient(left center, #00B807 0%, #00B807 ' + percent + '%, #ECECEC ' + percent + '%, #ECECEC 100%)');

        $(item).parents('.calc-tab__item').find('.value').text(format($(item).val()))
            
    })

    $('.custom-range input').map((index, item) => {
        let val = ($(item).val() - $(item).attr('min')) / ($(item).attr('max') - $(item).attr('min'));
        let percent = val * 100;
    
        $(item).css('background-image',
            '-webkit-gradient(linear, left top, right top, ' +
            'color-stop(' + percent + '%, #00B807), ' +
            'color-stop(' + percent + '%, #ECECEC)' +
            ')');
    
        $(item).css('background-image',
            '-moz-linear-gradient(left center, #00B807 0%, #00B807 ' + percent + '%, #ECECEC ' + percent + '%, #ECECEC 100%)');

        $(item).parents('.calc-tab__item').find('.value').text(format($(item).val()))
            
    })


    let inputBg = (element, handle) => {
        $(element).on(`${handle}`, function () {


            let percent
            let val

            val = ($(element).val() - $(element).attr('min')) / ($(element).attr('max') - $(element).attr('min'));
            percent = val * 100;

            $(element).css('background-image',
                '-webkit-gradient(linear, left top, right top, ' +
                'color-stop(' + percent + '%, #00B807), ' +
                'color-stop(' + percent + '%, #ECECEC)' +
                ')');
        
            $(element).css('background-image',
                '-moz-linear-gradient(left center, #00B807 0%, #00B807 ' + percent + '%, #ECECEC ' + percent + '%, #ECECEC 100%)');
             
            $(element).parents('.calc-tab__item').find('.value').text(format($(element).val()))
        })
    }

    $('.customRange input').on('input', function() { 
        inputBg( this, `input`)
    })  

    $('.custom-range input').on('input', function() { 
        inputBg( this, `input`)
    })  
 

    $('.form-input-check input[type="checkbox"]').on('change', function() {
        $(this).parent().siblings().find('input[type="checkbox"]').prop('checked', false);
     })


    //_____CALC TABS__________

    $('.calc-head span').click(function() {
        $('.calc-head span').removeClass('current')
        $(this).addClass('current')
        let index = $(this).index('.calc-head span')
        $('.calc-content__tab').removeClass('calc-content__tab-current')
        $('.calc-content__tab').eq(index).addClass('calc-content__tab-current')
    })


    //______OTHER CAROUSEL__________

    $('.other-carousel').owlCarousel({
        dots: false,
        nav: false,
        mouseDrag: false,
        smartSpeed: 700,
        margin: 20,
        responsive: {
            0: {
                items: 1,
                center: true
            },
            600: {
                items: 2,
                margin: 20,
            },
            1000: {
                items: 3,
                margin: 30,
            }
        }
    })

    $('.other-carousel__arrows .arrow-left').click(() => {
        $('.other-carousel').trigger('prev.owl.carousel', [700]);
    
    })

    $('.other-carousel__arrows .arrow-right').click(() => {
        $('.other-carousel').trigger('next.owl.carousel', [700]);  
    })



    //______STATUS POPUP__________


    $('.status-popup__open').click(e => {
        e.preventDefault()
        $('.status-popup').fadeIn(600)
    })
    
    $('.status-popup__close').click(() => {
        $('.status-popup').fadeOut(600)
    })
    
    
    $('.status-popup').click(e => {
        let div = $(".status-popup__content");
        if (!div.is(e.target) 
            && div.has(e.target).length === 0) { 
            $('.status-popup').fadeOut(600)
        }
    })


    //_______MAP SEARCH__________

    $('.maps-open').click(() => {
        $('.maps-side').addClass('maps-side-open')
        $('body').addClass('overflowH')
    })

    $('.maps-side__close').click(() => {
        $('.maps-side').removeClass('maps-side-open')
        $('body').removeClass('overflowH')
    })





    //_______FAQ_________


    $('.faq-links ul li').click(function() {
        let index = $(this).index('.faq-links ul li')
        $('.faq-links ul li').removeClass('current')
        $(this).addClass('current')
        $('.faq-tab').removeClass('faq-tab__current')
        $('.faq-tab').eq(index).addClass('faq-tab__current')
    })


    $('.faq-accordion__item').click(function() {
        if($(this).hasClass('faq-accordion__item-open')) {
            $(this).removeClass('faq-accordion__item-open')
        } else {
            $('.faq-accordion__item').removeClass('faq-accordion__item-open')
            $(this).addClass('faq-accordion__item-open')
        }
    })


});

    //loop slider

    var owl = $('.main-carousel');
    owl.owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});


document.addEventListener("DOMContentLoaded", function() {
    const API_URL = 'https://cbu.uz/ru/arkhiv-kursov-valyut/json/';
    const previousRates = {}; // Объект для хранения предыдущих курсов

    fetch(API_URL)
        .then(response => response.json())
        .then(data => {
            const rates = {
                USD: parseFloat(data.find(item => item.Ccy === 'USD').Rate),
                EUR: parseFloat(data.find(item => item.Ccy === 'EUR').Rate),
                RUB: parseFloat(data.find(item => item.Ccy === 'RUB').Rate)
            };

            // Для тестирования увеличиваем или уменьшаем значение курса
            previousRates.USD = rates.USD - (Math.random() * 0.5); // Уменьшение на случайную величину для теста
            previousRates.EUR = rates.EUR + (Math.random() * 0.5); // Увеличение на случайную величину для теста
            previousRates.RUB = rates.RUB - (Math.random() * 0.5); // Уменьшение на случайную величину для теста

            // Обновление курса и добавление треугольников
            updateRate('usd-buy', rates.USD, previousRates.USD);
            updateRate('usd-sell', rates.USD, previousRates.USD);
            updateRate('usd-cb', rates.USD, previousRates.USD);

            updateRate('eur-buy', rates.EUR, previousRates.EUR);
            updateRate('eur-sell', rates.EUR, previousRates.EUR);
            updateRate('eur-cb', rates.EUR, previousRates.EUR);

            updateRate('rub-buy', rates.RUB, previousRates.RUB);
            updateRate('rub-sell', rates.RUB, previousRates.RUB);
            updateRate('rub-cb', rates.RUB, previousRates.RUB);

            // Функция конвертации
            document.getElementById('sellAmount').addEventListener('input', calculateConversion);
            document.getElementById('sellCurrency').addEventListener('change', calculateConversion);
            document.getElementById('receiveCurrency').addEventListener('change', calculateConversion);

            function calculateConversion() {
                const sellAmount = parseFloat(document.getElementById('sellAmount').value);
                const sellCurrency = document.getElementById('sellCurrency').value;
                const receiveCurrency = document.getElementById('receiveCurrency').value;

                if (isNaN(sellAmount) || sellAmount <= 0) {
                    document.getElementById('receiveAmount').value = '';
                    return;
                }

                const sellRate = rates[sellCurrency];
                const receiveRate = rates[receiveCurrency];

                const receiveAmount = (sellAmount * sellRate) / receiveRate;
                document.getElementById('receiveAmount').value = receiveAmount.toFixed(2);
            }
        })
        .catch(error => console.error("Error fetching exchange rates:", error));

    function updateRate(elementId, newRate, oldRate) {
        const element = document.getElementById(elementId);
        if (!element) {
            console.error(`Элемент с ID ${elementId} не найден`);
            return;
        }

        // Очищаем содержимое элемента
        element.innerHTML = '';

        // Создаем span для значения курса
        const rateSpan = document.createElement('span');
        rateSpan.textContent = newRate.toFixed(2);

        // Добавляем индикатор изменения курса
        if (oldRate !== undefined) {
            const arrowSpan = document.createElement('span');
            arrowSpan.style.marginLeft = '5px'; // Добавляем отступ между числом и треугольником

            if (newRate > oldRate) {
                arrowSpan.textContent = '▲';
                arrowSpan.className = 'up';
            } else if (newRate < oldRate) {
                arrowSpan.textContent = '▼';
                arrowSpan.className = 'down';
            }

            // Добавляем треугольник справа от курса
            rateSpan.appendChild(arrowSpan);
        }

        // Вставляем все в элемент
        element.appendChild(rateSpan);
    }
});


document.addEventListener("DOMContentLoaded", function() {
    const API_URL = 'https://cbu.uz/ru/arkhiv-kursov-valyut/json/';

    fetch(API_URL)
        .then(response => response.json())
        .then(data => {
            const rates = {
                USD: parseFloat(data.find(item => item.Ccy === 'USD').Rate),
                EUR: parseFloat(data.find(item => item.Ccy === 'EUR').Rate),
                RUB: parseFloat(data.find(item => item.Ccy === 'RUB').Rate),
                GBP: parseFloat(data.find(item => item.Ccy === 'GBP').Rate),
                CHF: parseFloat(data.find(item => item.Ccy === 'CHF').Rate)
            };

            updateTableRates(rates);
            updateLastUpdatedTime(); // Обновление времени после обновления данных
        })
        .catch(error => console.error("Error fetching exchange rates:", error));

    function updateTableRates(rates) {
        const rows = document.querySelectorAll('.rates-main__table tr');
        
        rows.forEach(row => {
            const currencyCell = row.children[0];
            const rateCell = row.children[1];
            const buyCell = row.children[2];
            const sellCell = row.children[3];

            if (currencyCell.textContent.includes('USD')) {
                updateRow(rateCell, buyCell, sellCell, rates.USD);
            } else if (currencyCell.textContent.includes('EUR')) {
                updateRow(rateCell, buyCell, sellCell, rates.EUR);
            } else if (currencyCell.textContent.includes('RUB')) {
                updateRow(rateCell, buyCell, sellCell, rates.RUB);
            } else if (currencyCell.textContent.includes('GBP')) {
                updateRow(rateCell, buyCell, sellCell, rates.GBP);
            } else if (currencyCell.textContent.includes('CHF')) {
                updateRow(rateCell, buyCell, sellCell, rates.CHF);
            }
        });
    }

    function updateRow(rateCell, buyCell, sellCell, rate) {
        const formattedRate = rate.toLocaleString('ru-RU', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
        rateCell.textContent = formattedRate;
        buyCell.textContent = formattedRate;
        sellCell.textContent = formattedRate;
    }

    function updateLastUpdatedTime() {
        const now = new Date();
        const formattedDate = now.toLocaleDateString('ru-RU');
        const formattedTime = now.toLocaleTimeString('ru-RU');
        const lastUpdatedElement = document.querySelector('.rates-main__time');
        lastUpdatedElement.textContent = `обновлен ${formattedDate}`;
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const calcTabs = document.querySelectorAll('.calc-content__tab');
    const form = document.getElementById('calc-form');
    const typeInput = document.getElementById('form-type');
    const amountInput = document.getElementById('form-amount');
    const termInput = document.getElementById('form-term');
    const downPaymentInput = document.getElementById('form-down-payment-percent');
    const interestRateInput = document.getElementById('form-interest-rate');
    const monthlyPaymentInput = document.getElementById('form-monthly-payment');

    calcTabs.forEach(tab => {
        const amountRange = tab.querySelector('input[type="range"][min="100000"]');
        const termRange = tab.querySelector('input[type="range"][min="3"]');
        const downPaymentRange = tab.querySelector('input[type="range"][min="0"][max="100"]');
        const interestRateRange = tab.querySelector('input[type="range"][min="0"][max="100"]');

        const applyButton = tab.querySelector('.calc-right__btn');

        function updateFormValues() {
            const loanAmount = parseFloat(amountRange.value);
            const loanTerm = parseInt(termRange.value);
            const downPaymentPercent = parseFloat(downPaymentRange.value);
            const interestRate = parseFloat(interestRateRange.value);

            const downPaymentAmount = (loanAmount * downPaymentPercent) / 100;
            const loanPrincipal = loanAmount - downPaymentAmount;
            const monthlyInterestRate = interestRate / 12 / 100;

            const monthlyPayment = (loanPrincipal * monthlyInterestRate) / 
                                   (1 - Math.pow(1 + monthlyInterestRate, -loanTerm));

            // Заполняем значения в скрытую форму
            amountInput.value = loanAmount;
            termInput.value = loanTerm;
            downPaymentInput.value = downPaymentPercent;
            interestRateInput.value = interestRate;
            monthlyPaymentInput.value = monthlyPayment.toFixed(2);
        }

        // Привязываем обновление формы к событиям изменения ползунков
        amountRange.addEventListener('input', updateFormValues);
        termRange.addEventListener('input', updateFormValues);
        downPaymentRange.addEventListener('input', updateFormValues);
        interestRateRange.addEventListener('input', updateFormValues);

        // Обработчик клика на кнопку "Подать заявку"
        applyButton.addEventListener('click', function(event) {
            event.preventDefault();

            // Определяем тип калькуляции (в зависимости от активного таба)
            if (tab.classList.contains('calc-content__tab-current')) {
                typeInput.value = 'credit'; // или 'deposit', 'bond' в зависимости от выбранного таба
            }

            // Обновляем значения перед отправкой формы
            updateFormValues();

            // Отправляем форму
            form.submit();
        });

        // Инициализация значений при загрузке страницы
        updateFormValues();
    });
});









