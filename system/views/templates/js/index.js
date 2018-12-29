/* BANNER PRINCIPAL - SLIDERSHOW
------------------------------*/

// VARIÁVEIS
var banners = [];
var tamanhoArrayBanners = 3;
var imagemDoRepositorio = 1;
var imagemDoArrayBanners = 0;
var tempoIntervaloBanner = 0;

var tagImgBanner;
var tagButtonVoltar;
var tagButtonProximo;
var tagDivTemporizador;

// CONSTANTES
var INTERVALO = 500;
var DIVISOR_DO_INTERVALO = 5; //Serve para colocar a barra temporizador em 100%. Para isso, ao definir um INTERVALO deve se ter um divisor que o resultado da divisão seja 100.

// FUNCIONALIDADES
function preencherBanners() {
    []
    for (var p = 0; p < tamanhoArrayBanners; p++) {
        banners[p] = "views/templates/banners/banner-" + imagemDoRepositorio + ".jpg";
        imagemDoRepositorio++;
    }
}

function inserirBannerNaTag(img) {
    tagImgBanner.src = banners[img];
}

function trocarBanner(direcao) {
    tempoIntervaloBanner = 0;
    imagemDoArrayBanners += direcao;

    if (imagemDoArrayBanners >= tamanhoArrayBanners) {
        imagemDoArrayBanners = 0;
    } else if (imagemDoArrayBanners < 0) {
        imagemDoArrayBanners = tamanhoArrayBanners - 1;
    }

    inserirBannerNaTag(imagemDoArrayBanners);
}

function animacaoBanner() {
    tempoIntervaloBanner++;
    if (tempoIntervaloBanner >= INTERVALO) {
        tempoIntervaloBanner = 0;
        trocarBanner(1);
    }

    var tempo = tempoIntervaloBanner / DIVISOR_DO_INTERVALO;
    tagDivTemporizador.style.width = tempo + "%";

    window.requestAnimationFrame(animacaoBanner);
}

function inicializador() {
    preencherBanners();
    tagImgBanner = document.getElementById("banner-principal");
    tagButtonVoltar = document.getElementById("btn-slideshow-voltar").onclick = function () {
        trocarBanner(-1)
    };
    tagButtonProximo = document.getElementById("btn-slideshow-proximo").onclick = function () {
        trocarBanner(1)
    };
    tagDivTemporizador = document.getElementById("temporizador");
    inserirBannerNaTag(imagemDoArrayBanners);
    animacaoBanner();
}

window.addEventListener("load", inicializador);