
let currentContainer = null;
//function for display tables
function displayContainer(containerId) {
  var selectedContainer = document.getElementById(containerId);

  if (selectedContainer === currentContainer) {
    selectedContainer.style.display = 'none';
    currentContainer = null;
  } else {
    if (currentContainer) {
      currentContainer.style.display = 'none';
    }
    selectedContainer.style.display = 'table';
    currentContainer = selectedContainer;
  }
}


// eto naman function for selected navigations
