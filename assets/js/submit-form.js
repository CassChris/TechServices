
function contactForm() {
  const $form = d.querySelector(".contact__form");
  const $contentForm = d.querySelector(".content__form");

  d.addEventListener("submit", (e) => {
    e.preventDefault();

    const $loader = d.querySelector(".contact-form-loader"),
      $response = d.querySelector(".contact-form-response");
      $loader.classList.remove("d-none");
      
      fetch("https://formsubmit.co/ajax/casafranca.christian.ci.2020045@iestpgildaballivian.edu.pe", {
          method: "POST",
          body: new FormData(e.target),
        })
        .then((res) => (res.ok ? res.json() : Promise.reject(res)))
        .then((json) => {
            $contentForm.classList.add("d-none");
            $response.classList.remove("d-none");
            setTimeout(() => {
                $loader.classList.add("d-none");
                $response.innerHTML = `<p>Mensaje enviado con Exito! 😺</p>`;
          }, 2000)
            setTimeout(() => {
                $contentForm.classList.remove("d-none");
          }, 3000)
        $form.reset();
      })
      .catch((err) => {
        console.log(err);
        let message =
          err.statusText || "Ocurrió un error al enviar, intenta nuevamente";
        $response.innerHTML = `<p>Error ${err.status} : ${message}</p>`;
      })
      .finally(() =>
        setTimeout(() => {
          $response.classList.add("d-none");
          $response.innerHTML = "";
        }, 3000)
      );
  });
}