const nav = document.querySelector('.list');

nav.addEventListener('click', ({ target }) => {
  if (target.nodeName === 'LI') {
    const formEl = document.querySelector('form');
    const [_, form, inputs, placeholers] = target.attributes;
    formEl.setAttribute('action', `calculation/${form.value}.php`);
    [...target.parentElement.children]
      .forEach(child => child.classList.remove('active'));
    target.classList.add('active');
    createInputs(formEl, inputs.value, placeholers.value);
  }
});

function createInputs(parent, children, placeholers) {
  [...parent.children].forEach(child => child.remove());
  placeholers = placeholers.split(' ')
  while(children--) {
    const input = document.createElement('input');
    input.classList.add('form__input');
    input.setAttribute('name', children);
    input.setAttribute('placeholder', placeholers[children]);
    input.setAttribute('type', 'number');
    input.setAttribute('min', '0');
    parent.appendChild(input);
  }
  const button = document.createElement('button');
  button.classList.add('form__button');
  button.setAttribute('type', 'submit');
  button.innerText = 'Oblicz';
  parent.append(button);
}
