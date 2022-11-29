(function() {
    // Add event listener
    document.addEventListener("mousemove", parallax);
    const elem = document.querySelector("#parallax");
    // Magic happens here
    function parallax(e) {
        let _w = window.innerWidth/2;
        let _h = window.innerHeight/2;
        let _mouseX = e.clientX;
        let _mouseY = e.clientY;
        let _image = `${0 + (_mouseX - _w) * 0.015}px, ${0 + (_mouseY - _h) * 0.015}px`;
        let x = `${_image}`;
        elem.style.transform = `translate(${x})`;
    }

})();