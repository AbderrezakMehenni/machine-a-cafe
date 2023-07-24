<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class MachineACafe
    {
        private $marque;
        private $cafe;
        private $enFonction;

        public function __construct($marque)
        {
            $this->marque = $marque;
            $this->cafe = false;
            $this->enFonction = false;
        }

        public function allumage($etat)
        {
            if ($etat === true) {
                $this->enFonction = true;
                echo "{$this->marque} est en fonction.<br>";
            } else {
                echo "{$this->marque} est éteinte.<br>";
            }
        }

        public function mettreUneDosette()
        {
            if (!$this->enFonction) {
                echo "La machine doit être allumée pour mettre une dosette.<br>";
            } else {
                $this->cafe = true;
                echo "Je mets une dosette.<br>";
            }
        }

        public function faireDuCafe()
        {
            if (!$this->enFonction) {
                echo "La machine doit être allumée pour faire du café.<br>";
            } else {
                echo "Le café est prêt !<br>";
            }
        }
    }

    $machine = new MachineACafe("Senseo");
    $machine->allumage(true);
    $machine->mettreUneDosette();
    $machine->faireDuCafe();
    ?>
</body>

</html>