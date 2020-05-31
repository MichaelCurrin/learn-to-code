/**
 * @(#)TimesTableGame.java
 *
 * I wrote this in over a year after I finished high-school, which is when
 * I learnt Java. But adding this to Github to preserve it for myself as an early
 * record.
 *
 * @author Michael Currin
 * @version 1.00 2009/5/13
 */
import java.io.*;
import java.text.*;
import java.util.*;

public class TimesTableGame {
        
    /**
     * Creates a new instance of <code>TimesTableGame</code>.
     */
    public TimesTableGame() {
    }
    
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws IOException
    	{
       
           
	//Multiplication game
	// Test user times table within the limit they set

BufferedReader reader = new BufferedReader (new InputStreamReader(System.in));
int intInput = 0;
int a1 = 2;	//min for 1st no.
int a2 = 12; // max for 1st no.
int b1 = 2;	// min for 2nd no.
int b2 = 12; // max for 2nd no.
int score = 0;
int totalq = 0;

// User sets min and max
try
	{
		// Single timestable option
		/* 
		 *
		System.outprintln("Focus on single timestable Y/N? />");
		if (reader.readLine().equals("Y"))
		{									// a: 2=>x		b: x=>x			e.g. 2 to 14 times by 14
		a1 = 2;								
		a2 = Integer.parseInt(reader.readLine());
		b1 = a2;
		b2 = a2;
				}
		else
		*/
		//	{									// a: 2=>12 	b: 2=>12
		System.out.print("\nMin: />");
		a1 = Integer.parseInt(reader.readLine());
		b1= a1;
	System.out.print("\nMax: />");
		a2 = Integer.parseInt(reader.readLine());
		b2=a2;
		//	}
		}
catch (IOException e)
	{	System.out.println(e);
	}

System.out.println();

while (true)
{
	int firstno = (int)(Math.random())*(a2-a1) + a1;	// random up to 10 plus 2
	int secondno = (int)(Math.random())*(b2-b1) + b1;

//alt method
/*int secondno = 0;
while((secondno<b1)||(secondno>b2))
secondno =(int)(Math.random())*30+1;
*/

// Question 		
// Q1) 2 x 14 = />
System.out.print("Q"+(totalq+1)+ ") " + firstno + " x " + secondno + " = />");

try
	{
	intInput = Integer.parseInt(reader.readLine());
	if (intInput == 0)
		break; // break on 0
	}
catch (IOException e)
	{
		break; // break on text
	}
		
	
if (intInput == (firstno*secondno))
	{
	score++;
	System.out.print(" Correct");
	}
else
	{
	System.out.print(" Incorrect. A: " + firstno*secondno);
	}
		
		totalq++;
}


	System.out.println("\nScore: " + score + "/" + totalq + " = " + (int)(score/totalq)*100 + "%");
	System.out.println("Press the Any key to exit");
	reader.readLine();
	System.exit(0);
       
    }
}
