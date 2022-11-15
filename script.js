function selecciona (element, color, color2) {
    
    if (element.style.borderColor == color) {
        element.style.borderColor = color2;
    }
    else{
        element.style.borderColor = color;
    }

}