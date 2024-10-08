"use strict";

// Class definition
var KTApp = function () {
    var select2FocusFixInitialized = false;
    var countUpInitialized = false;


    var createBootstrapTooltip = function (el, options) {
        if (el.getAttribute("data-kt-initialized") === "1") {
            return;
        }

        var delay = {};

        // Handle delay options
        if (el.hasAttribute('data-bs-delay-hide')) {
            delay['hide'] = el.getAttribute('data-bs-delay-hide');
        }

        if (el.hasAttribute('data-bs-delay-show')) {
            delay['show'] = el.getAttribute('data-bs-delay-show');
        }

        if (delay) {
            options['delay'] = delay;
        }

        // Check dismiss options
        if (el.hasAttribute('data-bs-dismiss') && el.getAttribute('data-bs-dismiss') == 'click') {
            options['dismiss'] = 'click';
        }

        // Initialize popover
        var tp = new bootstrap.Tooltip(el, options);

        // Handle dismiss
        if (options['dismiss'] && options['dismiss'] === 'click') {
            // Hide popover on element click
            el.addEventListener("click", function (e) {
                tp.hide();
            });
        }

        el.setAttribute("data-kt-initialized", "1");

        return tp;
    }

    var createBootstrapTooltips = function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));

        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            createBootstrapTooltip(tooltipTriggerEl, {});
        });
    }

    var createBootstrapPopover = function (el, options) {
        if (el.getAttribute("data-kt-initialized") === "1") {
            return;
        }

        var delay = {};

        // Handle delay options
        if (el.hasAttribute('data-bs-delay-hide')) {
            delay['hide'] = el.getAttribute('data-bs-delay-hide');
        }

        if (el.hasAttribute('data-bs-delay-show')) {
            delay['show'] = el.getAttribute('data-bs-delay-show');
        }

        if (delay) {
            options['delay'] = delay;
        }

        // Handle dismiss option
        if (el.getAttribute('data-bs-dismiss') == 'true') {
            options['dismiss'] = true;
        }

        if (options['dismiss'] === true) {
            options['template'] = '<div class="popover" role="tooltip"><div class="popover-arrow"></div><span class="popover-dismiss btn btn-icon"></span><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        }

        // Initialize popover
        var popover = new bootstrap.Popover(el, options);

        // Handle dismiss click
        if (options['dismiss'] === true) {
            var dismissHandler = function (e) {
                popover.hide();
            }

            el.addEventListener('shown.bs.popover', function () {
                var dismissEl = document.getElementById(el.getAttribute('aria-describedby'));
                dismissEl.addEventListener('click', dismissHandler);
            });

            el.addEventListener('hide.bs.popover', function () {
                var dismissEl = document.getElementById(el.getAttribute('aria-describedby'));
                dismissEl.removeEventListener('click', dismissHandler);
            });
        }

        el.setAttribute("data-kt-initialized", "1");

        return popover;
    }

    var createBootstrapPopovers = function () {
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));

        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            createBootstrapPopover(popoverTriggerEl, {});
        });
    }

    var createBootstrapToasts = function () {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'));
        var toastList = toastElList.map(function (toastEl) {
            if (toastEl.getAttribute("data-kt-initialized") === "1") {
                return;
            }

            toastEl.setAttribute("data-kt-initialized", "1");

            return new bootstrap.Toast(toastEl, {})
        });
    }

    var createButtons = function () {
        var buttonsGroup = [].slice.call(document.querySelectorAll('[data-kt-buttons="true"]'));

        buttonsGroup.map(function (group) {
            if (group.getAttribute("data-kt-initialized") === "1") {
                return;
            }

            var selector = group.hasAttribute('data-kt-buttons-target') ? group.getAttribute('data-kt-buttons-target') : '.btn';
            var activeButtons = [].slice.call(group.querySelectorAll(selector));

            // Toggle Handler
            KTUtil.on(group, selector, 'click', function (e) {
                activeButtons.map(function (button) {
                    button.classList.remove('active');
                });

                this.classList.add('active');
            });

            group.setAttribute("data-kt-initialized", "1");
        });
    }

    var createDateRangePickers = function () {
        // Check if jQuery included
        if (typeof jQuery == 'undefined') {
            return;
        }

        // Check if daterangepicker included
        if (typeof $.fn.daterangepicker === 'undefined') {
            return;
        }

        var elements = [].slice.call(document.querySelectorAll('[data-kt-daterangepicker="true"]'));
        var start = moment().subtract(29, 'days');
        var end = moment();

        elements.map(function (element) {
            if (element.getAttribute("data-kt-initialized") === "1") {
                return;
            }

            var display = element.querySelector('div');
            var attrOpens = element.hasAttribute('data-kt-daterangepicker-opens') ? element.getAttribute('data-kt-daterangepicker-opens') : 'left';
            var range = element.getAttribute('data-kt-daterangepicker-range');

            var cb = function (start, end) {
                var current = moment();

                if (display) {
                    if (current.isSame(start, "day") && current.isSame(end, "day")) {
                        display.innerHTML = start.format('D MMM YYYY');
                    } else {
                        display.innerHTML = start.format('D MMM YYYY') + ' - ' + end.format('D MMM YYYY');
                    }
                }
            }

            if (range === "today") {
                start = moment();
                end = moment();
            }

            $(element).daterangepicker({
                startDate: start,
                endDate: end,
                opens: attrOpens,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);

            element.setAttribute("data-kt-initialized", "1");
        });
    }

    var createSelect2 = function () {
        // Check if jQuery included
        if (typeof jQuery == 'undefined') {
            return;
        }

        // Check if select2 included
        if (typeof $.fn.select2 === 'undefined') {
            return;
        }

        var elements = [].slice.call(document.querySelectorAll('[data-control="select2"], [data-kt-select2="true"]'));

        elements.map(function (element) {
            if (element.getAttribute("data-kt-initialized") === "1") {
                return;
            }

            var options = {
                dir: document.body.getAttribute('direction')
            };

            if (element.getAttribute('data-hide-search') == 'true') {
                options.minimumResultsForSearch = Infinity;
            }

            $(element).select2(options);

            element.setAttribute("data-kt-initialized", "1");
        });

        /*
        * Hacky fix for a bug in select2 with jQuery 3.6.0's new nested-focus "protection"
        * see: https://github.com/select2/select2/issues/5993
        * see: https://github.com/jquery/jquery/issues/4382
        *
        * TODO: Recheck with the select2 GH issue and remove once this is fixed on their side
        */

        if (select2FocusFixInitialized === false) {
            select2FocusFixInitialized = true;

            $(document).on('select2:open', function (e) {
                var elements = document.querySelectorAll('.select2-container--open .select2-search__field');
                if (elements.length > 0) {
                    elements[elements.length - 1].focus();
                }
            });
        }
    }

    var createAutosize = function () {
        var inputs = [].slice.call(document.querySelectorAll('[data-kt-autosize="true"]'));

        inputs.map(function (input) {
            if (input.getAttribute("data-kt-initialized") === "1") {
                return;
            }

            autosize(input);

            input.setAttribute("data-kt-initialized", "1");
        });
    }

    var createCountUp = function () {
        var elements = [].slice.call(document.querySelectorAll('[data-kt-countup="true"]:not(.counted)'));

        elements.map(function (element) {
            if (KTUtil.isInViewport(element) && KTUtil.visible(element)) {
                if (element.getAttribute("data-kt-initialized") === "1") {
                    return;
                }

                var options = {};

                var value = element.getAttribute('data-kt-countup-value');
                value = parseFloat(value.replace(/,/g, ""));

                if (element.hasAttribute('data-kt-countup-start-val')) {
                    options.startVal = parseFloat(element.getAttribute('data-kt-countup-start-val'));
                }

                if (element.hasAttribute('data-kt-countup-duration')) {
                    options.duration = parseInt(element.getAttribute('data-kt-countup-duration'));
                }

                if (element.hasAttribute('data-kt-countup-decimal-places')) {
                    options.decimalPlaces = parseInt(element.getAttribute('data-kt-countup-decimal-places'));
                }

                if (element.hasAttribute('data-kt-countup-prefix')) {
                    options.prefix = element.getAttribute('data-kt-countup-prefix');
                }

                if (element.hasAttribute('data-kt-countup-separator')) {
                    options.separator = element.getAttribute('data-kt-countup-separator');
                }

                if (element.hasAttribute('data-kt-countup-suffix')) {
                    options.suffix = element.getAttribute('data-kt-countup-suffix');
                }

                var count = new countUp.CountUp(element, value, options);

                count.start();

                element.classList.add('counted');

                element.setAttribute("data-kt-initialized", "1");
            }
        });
    }

    var createCountUpTabs = function () {
        if (countUpInitialized === false) {
            // Initial call
            createCountUp();

            // Window scroll event handler
            window.addEventListener('scroll', createCountUp);
        }

        // Tabs shown event handler
        var tabs = [].slice.call(document.querySelectorAll('[data-kt-countup-tabs="true"][data-bs-toggle="tab"]'));
        tabs.map(function (tab) {
            if (tab.getAttribute("data-kt-initialized") === "1") {
                return;
            }

            tab.addEventListener('shown.bs.tab', createCountUp);

            tab.setAttribute("data-kt-initialized", "1");
        });

        countUpInitialized = true;
    }

    var createTinySliders = function () {
        // Init Slider
        var initSlider = function (el) {
            if (!el) {
                return;
            }

            const tnsOptions = {};

            // Convert string boolean
            const checkBool = function (val) {
                if (val === 'true') {
                    return true;
                }
                if (val === 'false') {
                    return false;
                }
                return val;
            };

            // get extra options via data attributes
            el.getAttributeNames().forEach(function (attrName) {
                // more options; https://github.com/ganlanyuan/tiny-slider#options
                if ((/^data-tns-.*/g).test(attrName)) {
                    let optionName = attrName.replace('data-tns-', '').toLowerCase().replace(/(?:[\s-])\w/g, function (match) {
                        return match.replace('-', '').toUpperCase();
                    });

                    if (attrName === 'data-tns-responsive') {
                        // fix string with a valid json
                        const jsonStr = el.getAttribute(attrName).replace(/(\w+:)|(\w+ :)/g, function (matched) {
                            return '"' + matched.substring(0, matched.length - 1) + '":';
                        });
                        try {
                            // convert json string to object
                            tnsOptions[optionName] = JSON.parse(jsonStr);
                        }
                        catch (e) {
                        }
                    }
                    else {
                        tnsOptions[optionName] = checkBool(el.getAttribute(attrName));
                    }
                }
            });

            const opt = Object.assign({}, {
                container: el,
                slideBy: 'page',
                autoplay: true,
                autoplayButtonOutput: false,
            }, tnsOptions);

            if (el.closest('.tns')) {
                KTUtil.addClass(el.closest('.tns'), 'tns-initiazlied');
            }

            return tns(opt);
        }

        // Sliders
        const elements = Array.prototype.slice.call(document.querySelectorAll('[data-tns="true"]'), 0);

        if (!elements && elements.length === 0) {
            return;
        }

        elements.forEach(function (el) {
            if (el.getAttribute("data-kt-initialized") === "1") {
                return;
            }

            initSlider(el);

            el.setAttribute("data-kt-initialized", "1");
        });
    }

    var initSmoothScroll = function () {
        if (SmoothScroll) {
            new SmoothScroll('a[data-kt-scroll-toggle][href*="#"]', {
                speed: 1000,
                speedAsDuration: true,
                offset: function (anchor, toggle) {
                    // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
                    // This example is a function, but you could do something as simple as `offset: 25`

                    // An example returning different values based on whether the clicked link was in the header nav or not
                    if (anchor.hasAttribute('data-kt-scroll-offset')) {
                        var val = KTUtil.getResponsiveValue(anchor.getAttribute('data-kt-scroll-offset'));

                        return val;
                    } else {
                        return 0;
                    }
                }
            });
        }
    }

    var initCheck = function () {
        // Toggle Handler
        KTUtil.on(document.body, '[data-kt-check="true"]', 'change', function (e) {
            var check = this;
            var targets = document.querySelectorAll(check.getAttribute('data-kt-check-target'));

            KTUtil.each(targets, function (target) {
                if (target.type == 'checkbox') {
                    target.checked = check.checked;
                } else {
                    target.classList.toggle('active');
                }
            });
        });
    }

    var initBootstrapCollapse = function () {
        KTUtil.on(document.body, '.collapsible[data-bs-toggle="collapse"]', 'click', function (e) {
            if (this.classList.contains('collapsed')) {
                this.classList.remove('active');
                this.blur();
            } else {
                this.classList.add('active');
            }

            if (this.hasAttribute('data-kt-toggle-text')) {
                var text = this.getAttribute('data-kt-toggle-text');
                var target = this.querySelector('[data-kt-toggle-text-target="true"]');
                var target = target ? target : this;

                this.setAttribute('data-kt-toggle-text', target.innerText);
                target.innerText = text;
            }
        });
    }

    var initBootstrapRotate = function () {
        KTUtil.on(document.body, '[data-kt-rotate="true"]', 'click', function (e) {
            if (this.classList.contains('active')) {
                this.classList.remove('active');
                this.blur();
            } else {
                this.classList.add('active');
            }
        });
    }

    var initPageLoader = function () {
        // CSS3 Transitions only after page load(.page-loading or .app-page-loading class added to body tag and remove with JS on page load)
        KTUtil.removeClass(document.body, 'page-loading');
        document.body.removeAttribute('data-kt-app-page-loading');
    }

    return {
        init: function () {
            initSmoothScroll();

            initCheck();

            initBootstrapCollapse();

            initBootstrapRotate();
        },

        initPageLoader: function () {
            initPageLoader();
        },

        createInstances: function () {

            createBootstrapTooltips();

            createBootstrapPopovers();

            createBootstrapToasts();

            createDateRangePickers();

            createButtons();

            createSelect2();

            createCountUp();

            createCountUpTabs();

            createAutosize();

            createTinySliders();
        }
    };
}();

// Initialize app on document ready
KTUtil.onDOMContentLoaded(function () {
    KTApp.init();
    KTApp.createInstances();
});

// Initialize page loader on window load
window.addEventListener("load", function () {
    KTApp.initPageLoader();
});

// Declare KTApp for Webpack support
if (typeof module !== 'undefined' && typeof module.exports !== 'undefined') {
    module.exports = KTApp;
}
