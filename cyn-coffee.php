<?php
	/* CynCoffee beta-v1.0 */
	/* CadaVezQueDesayunoContigoSeMeEmpalmaLaSonrisa Corp. 2016 */
	/* https://github.com/belsierre/cyn-coffee */

	require_once("functions.php");

	/* Config */
	$HorasDeCortado = array (Inicio => "14",Fin => "19");
	$EdulcoranteDefault = false;
	$TipoDefault = "ConLeche";

	/* Script */
	while (1) {
		$CafesQueLlevoEnElCuerpo = 0;
		$Hoy = date('D');
		while ($Hoy == date('D')) {
			if ($NecesitoUnCafe || $QuieroUnCafe) {
				$Cafe = new stdClass;
				$Cafe -> ConCafeina = false;
				$Cafe -> Tipo = TipoDefault;
				$Cafe -> Edulcorante = EdulcoranteDefault;

				/* Elegir Café */
				if ($CafesQueLlevoEnElCuerpo) {
					$Hora = date(H);
					if ( ($Hora > $HorasDeCortado["Inicio"]) && ($Hora < $HorasDeCortado["Fin"]) ) {
						if ( BuscarEnEstadisticasSobreEleccionDeCortados(rand(0,100)) ) {
							$Cafe -> Tipo = "Cortado";
						}
					}
				} else {
					$Cafe -> ConCafeina = true;
				}

				/* Tomar café */
				if (Tomar($Cafe)) {
					$Energia * 17;
					$CafesQueLlevoEnElCuerpo++;
					♥();
				} else {
					HCF();
				}

				$Cafe = null;

			}
		}
	}
?>
