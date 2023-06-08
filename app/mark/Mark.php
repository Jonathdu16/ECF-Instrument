<?php
    namespace App\Mark;

    /**
     * Classe Mark
     *
     * Description : Représente l'entité Auteur.
     */

    class Mark
    {
        private ?int $id = null;
        private ?string $mark = null;
        private ?string $date_modif = null;

        /**
         * Constructeur de la classe Mark.
         *
         * @param array|null $data Les données à utiliser pour l'hydratation de l'entité (facultatif).
         */

        public function __construct(?array $data = null)
        {
            if (!is_null($data)) {
                $this->hydrate($data);
            }
        }

        /**
         * Méthode hydrate
         *
         * Description : Hydrate l'entité avec les données fournies et qui permet aussi de remplir les données au fur et à mesure.
         *
         * @param array $data Les données à utiliser pour l'hydratation.
         * @return self L'objet Mark hydraté.
         */
        public function hydrate(array $data): self
        {
            foreach ($data as $key => $value) {
                $method = 'set' . ucfirst($key);
                if (method_exists(__CLASS__, $method)) {
                    $this->$method($value);
                }
            }
            return $this;
        }

        /**
         * Méthode est_nouveau
         *
         * Description : Vérifie si la marque est nouvelle (non enregistrée en base de données).
         *
         * @return bool True si l'entité est nouvelle, sinon False.
         */

        public function isNew(): bool
        {
            return !isset($this->id);
        }

        /**
        * Méthode getMark
        *
        * Description : Obtient le nom de la marque.
        *
        * @return string La marque.
        */
        public function getMark()
        {
            return $this->mark;
        }

        /**
        * Méthode setMark
        *
        * Description : Définit la marque.
        *
        * @param string $mark La marque.
        * @return self L'objet Mark mis à jour.
        * @throws Error si la chaîne dépasse 63 caractères ou est vide.
        */
        public function setMark(string $mark): self
        {
            if (strlen($mark) > 63) {
                trigger_error('Trop long (63 max)', E_USER_ERROR);
            }
            if (empty($name)) {
                trigger_error('chaine vide', E_USER_ERROR);
            }
            $this->mark = $mark;
            return $this;
        }

        /**
        * Méthode getDateModif
        *
        * Description : Obtient la date de modification de la marque.
        *
        * @return string|null La date de modification de la marque, ou null si non définie.
        */
        public function getDateModif(): string
        {
            return $this->date_modif;
        }

        /**
        * Méthode setDateModif
        *
        * Description : Définit la date de modification de la marque.
        *
        * @param string $date La date de modification de la marque.
        * @return self L'objet Mark mis à jour.
        */
        public function setDateModif(string $date): self
        {
            $this->date_modif = $date;
            return $this;
        }
    }