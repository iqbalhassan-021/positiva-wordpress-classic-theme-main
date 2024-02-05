var count = 0;
function hideMainForm() {
  document.getElementById("tab_left").style.backgroundColor = "#D9D7D7";
  document.getElementById("tab_right").style.backgroundColor = "#FD7605";
  document.getElementById("mainForm").style.display = "none";
  document.getElementById("mainFormhidden").style.display = "block";
}
function dispMainForm() {
  document.getElementById("tab_left").style.backgroundColor = "#FD7605";
  document.getElementById("tab_right").style.backgroundColor = "#D9D7D7";
  document.getElementById("mainFormhidden").style.display = "none";
  document.getElementById("mainForm").style.display = "block";
}
function show_hideNav() {
  count = count + 1;
  let the_nav = document.getElementById("nav");
  let toggle = document.getElementById('toggle');
  if (count % 2 == 1) {
    the_nav.style.display = "flex";
    toggle.style.backgroundImage = "url('<?php echo get_template_directory_uri(); ?>/assets/images/close.png')";
  } else if (count % 2 == 0) {

    the_nav.style.display = "none";
    toggle.style.backgroundImage = "url('/src/assets/images/feather_menu.png')";
  }


}
function verticalScrollBottom() {
  const divToBeScrolled = document.getElementById("lastdiv");
  divToBeScrolled.scrollIntoView({
    behavior: "smooth",
    block: "nearest",
    inline: "start",
  });
}
function verticalScrollup() {
  const divToBeScrolled = document.getElementById("firstdiv");
  divToBeScrolled.scrollIntoView({
    behavior: "smooth",
    block: "nearest",
    inline: "start",
  });
}

function show_mobiletab() {
  
  count = count + 1;
  let toggle_img = document.getElementById('xshowmore');
  if (count % 2 == 1) {
    document.getElementById("mobiletabmanue").style.display = "flex";
    toggle_img.style.transform = "rotate(90deg)";
  } else if (count % 2 == 0) {
    document.getElementById("mobiletabmanue").style.display = "none";
    toggle_img.style.transform = "rotate(0deg)";
  }

}



