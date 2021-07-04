/**
 * Add Foldable component's behaviour.
 */

const Foldable = () => {
  const foldableTitle = document.querySelectorAll('.Foldable__title');

  foldableTitle.forEach(item => (
    item.addEventListener('click', () => (
      item.parentNode.classList.toggle('Foldable--open')
    ))
  ));
};

export default Foldable;
