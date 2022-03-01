<?php
    include_once "Crud.php";

    class RentalController{

        private $crud;

        public function __construct(){
            $this->crud = new Crud();
        }
        public function addRental(){
            $rental_data = [
                'rental_name' => $_POST['rental_name'],
            ];
            $rental_id = $this->crud->create($rental_data, 'rentals');


            $this->saveAndUploadRentalImage($rental_id);
            Session::set('success-message', 'Rental Added Successfully!');

            header('Location: list-rentals.php'); 

        }
        public function createRental($rental_id){

            $data = [
                'rental_name' => $rental_id,
            ];

            $this->crud->create($data, 'rentals');
                           

                    
        }
        public function getRentals(){
            $query = 'SELECT * FROM rentals';
            

            $results = $this->crud->read($query);
            return $results;

        }
        public function getRental($rental_id){
            $query = "SELECT * FROM rentals 
            WHERE rental_id = $rental_id";
        
            $results = $this->crud->read($query);
            return $results;

        }
        public function editRental($rental_id){

            $category_name = $_POST['rental_name'];

            $sql = "UPDATE rentals
                    set  rental_name = '$category_name'
                    WHERE rental_id = $category_id ";

            $this->crud->update($sql);

            $this->createRental( $rental_id );

            if(!empty($_FILES["cover_image"]["name"])){
                //delete pervious image
                $this->crud->delete("delete from imagesCategory where img_ref_category = $rental_id");
                $this->saveAndUploadRentalImage($rental_id);
            }
            Session::set('success-message', 'Category Edited Successfully!');

            header('Location: list-categories.php'); 
        }
        public function saveAndUploadRentalImage($rental_id){

            $dir = "../../assets/rentals_$rental_id";
            if(!file_exists($dir)){
                mkdir($dir, 0777, true);
            }

            $dir = $dir."/".basename($_FILES["cover_image"]["name"]);
            
            move_uploaded_file($_FILES["cover_image"]["tmp_name"], $dir);

            $image_info = [
                'img_path' => str_replace('../../','',$dir),
                'img_ref_rental' => $rental_id
            ];

            $this->crud->create($image_info, 'imagesRental');
        }





    }
    


?>