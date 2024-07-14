function calulaQuantidadeAComprar()
{
    let nr_casas_a_venda_X          = document.querySelector("#nr_casas").value
    let vlr_total_casas_I           = document.querySelector("#vlr_total_casas").value
    let vlr_orcamento_B             = document.querySelector("#vlr_orcamento").value
    let nr_casas_possiveis          = 0
    let input_nr_casas_possiveis    = document.querySelector("#nr_casas_possiveis")
    let container_resultado         = document.querySelector("#form_resultado")
    let container_calculo           = document.querySelector("#form_calculo")

    nr_casas_possiveis              = vlr_orcamento_B / (vlr_total_casas_I/nr_casas_a_venda_X)
    input_nr_casas_possiveis.value  = Math.floor(nr_casas_possiveis)

    container_resultado.style.display  = 'block'
    container_calculo.style.display    = 'none'

}

function reiniciar()
{
    document.querySelector("#form_resultado").style.display = 'none'
    document.querySelector("#form_calculo").style.display = 'block'
}
