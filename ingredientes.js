let selectedIngredients = [];

function selectIngredient(element, ingredientName) {
    
    element.classList.toggle('selected'); //Este método alterna la presencia de la clase 'selected' en el elemento HTML que se pasa como parámetro. Si el elemento ya tiene la clase 'selected', la elimina; si no la tiene, la añade.
    const index = selectedIngredients.indexOf(ingredientName);
    if (index === -1) {
        selectedIngredients.push(ingredientName);
    } else {
        // If it's already in the array, remove it
        selectedIngredients.splice(index, 1);
    }
    
    console.log(selectedIngredients);
}

