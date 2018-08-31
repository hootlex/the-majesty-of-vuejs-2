class Ninja {
  constructor(name) {
    this.name = name;
  }

  announce() {
    alert(`Ниндзя ${this.name} здесь!`)

    // эквивалентно этому:
    // alert('Черепашка-ниндзя ' + this.name + ' здесь!')
  }
}

new Ninja('Леонардо').announce();