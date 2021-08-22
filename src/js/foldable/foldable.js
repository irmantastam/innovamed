/**
 * Add foldable component's behaviour.
 */

const foldable = () => {
  const foldableTitle = document.querySelectorAll('.foldable__title');

  foldableTitle.forEach(item => (
    item.addEventListener('click', () => (
      item.parentNode.classList.toggle('foldable--open')
    ))
  ));
};

export default foldable;
