//Payment Accordion
$(".toggle").click(function (e) {
  e.preventDefault();

  let $this = $(this);
  $this.parent().toggleClass("active");

  if ($this.next().hasClass("show")) {
    $this.next().removeClass("show");
    $this.next().slideUp(250);
  } else {
    $this.parent().parent().find(".inner").removeClass("show");
    $this.parent().parent().find(".inner").slideUp(250);
    $this.next().toggleClass("show");
    $this.next().slideToggle(250);
  }
});

//Mobile Menu
$(".mobileMenu-icon").click(function () {
  $(".navMenu-mobile").toggleClass("active");
});

// Selectric
let selectricOptions = {
  disableOnMobile: false,
};

$(function () {
  $(".selectsec").selectric(selectricOptions);
});
console.log($(".selectsec").selectric);

// Language
$(".lang-click").click(function (e) {
  e.preventDefault();
  $(".lang-open").toggleClass("active");
});

const inputElements = [...document.querySelectorAll("input.code-input")];

inputElements.forEach((ele, index) => {
  ele.addEventListener("keydown", (e) => {
    if (e.keyCode === 8 && e.target.value === "")
      inputElements[Math.max(0, index - 1)].focus();
  });
  ele.addEventListener("input", (e) => {
    const [first, ...rest] = e.target.value;
    e.target.value = first ?? "";
    const lastInputBox = index === inputElements.length - 1;
    const insertedContent = first !== undefined;
    if (insertedContent && !lastInputBox) {
      inputElements[index + 1].focus();
      inputElements[index + 1].value = rest.join("");
      inputElements[index + 1].dispatchEvent(new Event("input"));
    }
  });
});
function onSubmit(e) {
  e.preventDefault();
  const code = [...document.getElementsByTagName("input")]
    .filter(({ name }) => name)
    .map(({ value }) => value)
    .join("");
  console.log(code);
}
//Select
function selectLink(version) {
  let versionLink = document.getElementById(`${version}`);
  if(versionLink.value === ""){
    return null

  }
  location.href = versionLink.value
}

//Header
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll > 400) $("#header").addClass("active");
  else $("#header").removeClass("active");
});

