/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Saif Ali Rahman 18010207
 */
import java.io.*;
import java.util.*;

public class seperatestudents {
    public static void main(String[] args) {
        System.out.println("would you like to seperate students.txt Yes/No ?");
        Scanner keyboard = new Scanner(System.in);  //creates a Scanner called keyboard that allows the user to input a response.
        String yesno = keyboard.nextLine(); 
    
        if (yesno.equals("Yes")) {
            seperatestudents(); //If the user inputs "Yes" the program will seperate the students.txt file.
        }
        else{
            if (yesno.equals("No")) {
                System.out.println("end of program");   //If the user inputs "No" the program ends.
                
            }
            else{
                if (yesno != "Yes") {
                    System.out.println("must enter Yes/No");//if the user doesnt enter "Yes" an error message is displayed.
                    return;
                }
                else{
                    if (yesno != "No") {
                        System.out.println("must enter Yes/No");    //if the user doesnt enter "No" an error message is displayed.
                        return;
                    }
                }
            }
        
    }
    }
    
    

    public static void seperatestudents() {
        
                try{
            BufferedReader inputStream = new BufferedReader(new FileReader("students.txt"));    //creates a bufferedreader stream that reads data from the students.txt file
            BufferedWriter outputStream18 = new BufferedWriter(new FileWriter("students18.txt"));   //Bufferedwriter allows us to create a stream that allows us to write data into
            BufferedWriter outputStream19 = new BufferedWriter(new FileWriter("students19.txt"));   //the selected files using the file we are reading from which in this case is
            BufferedWriter outputStream20 = new BufferedWriter(new FileWriter("students20.txt"));   //the students.txt file.                          
            
            int line18 = 0;
            int line19 = 0;
            int line20 = 0; // These line int values are used to count how many lines are in each file to determine how many students are in each file.
            int linetotal = -1; //linetotal was given a value of -1 as the program counts the empty line after the last line of text.
            String line;    // String value line is created here which is used to represent every line of text in students.txt
            
            while((line = inputStream.readLine())!= null){  // while loop here makes the program read line by line of the text file until there is no lines
                      
                linetotal++;    //putting linetotal++ here within the while loop makes the program add 1 to the value of line total every time a line is checked until there are no lines left.
                    
                if(line.contains("18")){    //line.contains(18) checks if the line contains the charsequence of "18".
                    outputStream18.write(line + "\n");  //outputStream18 writes the lines that contain "18" into the students18.txt file.
                    line18++;   //line18++ adds 1 to the line18 value until there are no lines left in students18.txt
                    
                }
                else{
                    if(line.contains("19")){    //line.contains(19) checks if the line contains the charseuquence of "19".
                        outputStream19.write(line + "\n");  //outputStream19 writes the lines that contain "19" into the students19.txt file.
                        line19++;   //line19++ adds 1 to the line19 value until there are no lines left in students19.txt
                        
                    }
                    
                    else{
                        if(line.contains("20")){    //line.contains(20) checks if the line contains the charseuquence of "20".
                            outputStream20.write(line + "\n");  //outputStream20 writes the lines that contain "19" into the students20.txt file.
                            line20++;   //line20++ adds 1 to the line20 value until there are no lines left in students20.txt
                            
                        }
                        else{
                            System.out.println("Students.txt has been seperated succesfully");
           
                        }
                    }
                }
            }
            System.out.println("number of students in students18.txt = " + line18); //prints how many students there are in students18.txt by reading how many lines there are
            System.out.println("number of students in students19.txt = " + line19); //prints how many students there are in students19.txt by reading how many lines there are
            System.out.println("number of students in students20.txt = " + line20); //prints how many students there are in students20.txt by reading how many lines there are
            System.out.println("total number of students = " + linetotal);  //prints the total number of students by counting how many lines there are in the students.txt file.
            
            
            inputStream.close();    //closes the inputStream for students.txt
            outputStream18.close(); //closes the outputStream for students18.txt
            outputStream19.close(); //closes the outputStream for students19.txt
            outputStream20.close(); //closes the outputStream for students20.txt
            
        }catch(FileNotFoundException e){
            System.out.println("file not found");   //prints file not found if a FileNotFoundException is caught
        }catch(IOException e){
            System.out.println("could not read from students.txt"); //prints this message if an IOException is caught
        }
    }
}


