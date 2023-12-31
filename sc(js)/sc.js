// (() => {
//   const clear_icon = document.getElementById("clear-search");
//   const serch_input = document.getElementById("search");

//   const showClearIcon = event => {
//       let search_value = event.target.value;
//       if (search_value.length > 0) {
//           clear_icon.style.display = "flex";
//       }else{
//           clear_icon.style.display = "none";
//       }
//   };
//   const hideClearIcon = () => {
//       clear_icon.style.display = "none";
//       serch_input.value = '';

//       // add callback()
//       console.log("input cleared");
//   };

//   serch_input.addEventListener("input", showClearIcon);
//   clear_icon.addEventListener("click", hideClearIcon);
// })();
// (() => {
//     const clear_icon = document.getElementById("clear-search");
//     const serch_input = document.getElementById("search3");
  
//     const showClearIcon = event => {
//         let search_value = event.target.value;
//         if (search_value.length > 0) {
//             clear_icon.style.display = "flex";
//         }else{
//             clear_icon.style.display = "none";
//         }
//     };
//     const hideClearIcon = () => {
//         clear_icon.style.display = "none";
//         serch_input.value = '';
  
//         // add callback()
//         console.log("input cleared");
//     };
  
//     serch_input.addEventListener("input", showClearIcon);
//     clear_icon.addEventListener("click", hideClearIcon);
//   })();
(() => {
    const clear_icon = document.getElementById("clear-search");
    const serch_input = document.getElementById("search");
  
    const showClearIcon = event => {
        let search_value = event.target.value;
        if (search_value.length > 0) {
            clear_icon.style.display = "flex";
        }else{
            clear_icon.style.display = "none";
        }
    };
    const hideClearIcon = () => {
        clear_icon.style.display = "none";
        serch_input.value = '';
  
        // add callback()
        console.log("input cleared");
    };
  
    serch_input.addEventListener("input", showClearIcon);
    clear_icon.addEventListener("click", hideClearIcon);
  })();
  (() => {
      const clear_icon = document.getElementById("clear-search");
      const serch_input = document.getElementById("search3");
    
      const showClearIcon = event => {
          let search_value = event.target.value;
          if (search_value.length > 0) {
              clear_icon.style.display = "flex";
          }else{
              clear_icon.style.display = "none";
          }
      };
      const hideClearIcon = () => {
          clear_icon.style.display = "none";
          serch_input.value = '';
    
          // add callback()
          console.log("input cleared");
      };
    
      serch_input.addEventListener("input", showClearIcon);
      clear_icon.addEventListener("click", hideClearIcon);
    })();