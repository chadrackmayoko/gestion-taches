function copyFunction(event) {
  const BtnParentEl = event.target.closest('.copyParent').querySelector('pre').textContent;

  navigator.clipboard.writeText(BtnParentEl);
  event.target.innerHTML = `
      <svg class="feather stroke-primary">
          <use href="../assets/svg/feather-icons/dist/feather-sprite.svg#copy">
      <svg>`;
  setTimeout(() => {
      event.target.innerHTML = `
          <svg class="feather stroke-primary">
              <use href="../assets/svg/feather-icons/dist/feather-sprite.svg#check-circle">
          <svg>`;
  }, 1500);
}

const copyBtn = document.querySelectorAll('.copy-text');
copyBtn.forEach((copyButton) => {
  copyButton.addEventListener('click', copyFunction);
});