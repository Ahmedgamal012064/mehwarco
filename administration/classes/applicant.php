<?php
    class Applicant {
        // Properties
        public $id;
        
        public $name;//string
        public $email;//string
        public $job_title;//string
        public $country_name;//string
        public $mobile_number;//string
        public $hourly_rate_sar;
        public $major;//string
        public $experience;
        public $img_path;
        public $cv_path;
        public $about;//string

        public $specialties;//array
        public $regions;//array
        public $softwares;//array

        function getRowsIntoString($rows, $colName){
            $vals_str = '';
            foreach($rows as $key=>$curr_row){
                $vals_str .= $curr_row[$colName] . ", ";
              }
              //Replace the last comma in the string with a semicolon
            $vals_str = substr_replace($vals_str ,"",-2);
            return $vals_str;
        }

        function varContains($var, $filterStr){
            if (stripos($var, $filterStr) === FALSE){
                //Not Found
                return false;
            } else { return true;}

        }

        function nameContains($filterStr){
            return $this->varContains($this->name, $filterStr);
        }

        function jobContains($filterStr){
            return $this->varContains($this->job_title, $filterStr);
        }

        function countryContains($filterStr){
            return $this->varContains($this->country_name, $filterStr);
        }

        function majorContains($filterStr){
            return $this->varContains($this->major, $filterStr);
        }

        function specialltiesContains($filterStr){
            return $this->varContains($this->get_specialties_str(), $filterStr);
        }

        function softwaresContains($filterStr){
            return $this->varContains($this->get_softwares_str(), $filterStr);
        }

        function regionsContains($filterStr){
            return $this->varContains($this->get_regions_str(), $filterStr);
        }

        function isRateBetween($rates){
            $rate_values = explode(",", $rates);
            //True or false
            return ($this->numberBetween($this->hourly_rate_sar, $rate_values[0], $rate_values[1]));
        }

        function isExperienceBetween($exps){
            $exp_values = explode(",", $exps);
            //True or false
            return ($this->numberBetween($this->experience, $exp_values[0], $exp_values[1]));
        }

        function numberBetween($number, $bound1, $bound2){
            $lower = 0;
            $upper = 0;
            if ($bound1 > $bound2){
                $upper = $bound1;
                $lower = $bound2;
            }
            else{
                $lower = $bound1;
                $upper = $bound2;
            }

            if ($number >= $lower && $number <= $upper){
                return true;
            } else {
                return false;
            }
        }
        
        function get_specialties_str() {
            return $this->getRowsIntoString($this->specialties, 'specialty_name');
        }

        function get_softwares_str() {
            return $this->getRowsIntoString($this->softwares, 'software_name');
        }

        function get_regions_str() {
            return $this->getRowsIntoString($this->regions, 'focus_region_name');
            
        }

        
    }
?>