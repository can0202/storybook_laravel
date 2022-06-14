const chapterChange = document.querySelector('#select_chapter');
const header = document.querySelector('.header-top');
const body = document.querySelector('body');
const checkBox = document.querySelector('.theme-switch #checkbox');
var darkMode = localStorage.getItem("darkMode");

// Scroll header animation
jQuery(document).ready(function ($) {
    var shrinkHeader = 100;
    $(window).scroll(function () {
        var scroll = getCurrentScroll();
        if (scroll >= shrinkHeader) {
            $(".header-top").addClass("shrink");
        } else {
            $(".header-top").removeClass("shrink");
        }
    });

    function getCurrentScroll() {
        return window.pageYOffset;
    }
})

var shrinkHeader = 100;
window.scroll = function () {
    console.log(a);
}
$(window).scroll(function () {
    var scroll = getCurrentScroll();
    if (scroll >= shrinkHeader) {
        $(".header-top").addClass("shrink");
    } else {
        $(".header-top").removeClass("shrink");
    }
});

function getCurrentScroll() {
    return window.pageYOffset;
}

function ChangeToSlug() {
    var slug;
    //Lấy text từ thẻ input title 
    slug = document.getElementById("slug").value;
    slug = slug.toLowerCase();
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('convert_slug').value = slug;
}

// DARK MODE THEME

function enableDarkMode() {
    body.classList.add("theme-dark");
    localStorage.setItem("darkMode", "enabled");
}

function disableDarkMode() {
    body.classList.remove("theme-dark");
    localStorage.setItem("darkMode", null);
}
if (darkMode === "enabled") {
    enableDarkMode();
}
checkBox.addEventListener('change', () => {
    var darkMode = localStorage.getItem("darkMode");
    if (darkMode !== "enabled") {
        enableDarkMode();
    } else {
        disableDarkMode();
    }
})
// CHANGE SELECT CHATER
chapterChange.onchange = function () {
    const url = chapterChange.value
    if (url) {
        window.location = url;
    }
    return false;
}

curent_chapter();

function curent_chapter() {
    const url = window.location.href;
    var option;

    for (var i = 0; i < chapterChange.options.length; i++) {
        option = chapterChange.options[i];

        if (option.value == url) {
            option.setAttribute('selected', true);
            return;
        }
    }

}
