const ubahArr = angka =>{
  const collapse = "#collapse"+angka;
  const icon = "#icon"+angka;
  $(collapse).on("show.bs.collapse", ()=>{
    $(icon).html("keyboard_arrow_up");
  });
  $(collapse).on("hide.bs.collapse", ()=>{
    $(icon).html("keyboard_arrow_down");
  });
};
