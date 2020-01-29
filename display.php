<?php 
	class Display {

		private $all = [];

		public function __construct($all) {
			$this->all = $all;
		}

		public function displayAllData() {
			echo "<table>";
			for ($i=0; $i < count($this->all); $i++) {
				echo "<tr>";
				for ($j=0; $j < count($this->all[$i]); $j++) { 
				 	echo "<td>".$this->all[$i][$j]."</td>";
				} 
				echo "</tr>";
			}
			echo "</table>";
		}

		public function displayForm() {
			echo "<br/><h2>Place your bids here!</h2>";
			echo "<h4>".$this->all[0][0]." | ".$this->all[0][3]." | ".$this->all[0][4]." | ".$this->all[0][5]."</h4>";
			for ($i=1; $i < count($this->all); $i++) {
				$item = "<div>".$this->all[$i][0]." | ".$this->all[$i][3]." | ".$this->all[$i][4]." | ".$this->all[$i][5]."<div/>"; 
				echo $item;
				echo "<input type='hidden' name='itemName$i' value='$item'";
				echo "<div>Bid: $ <input type='number' name='bidInput$i' min='0.01' step='0.01' placeholder='0.00'><br/><div/><br/>";
			}
		}
	}
?>