import java.util.Scanner;
import java.util.Stack;
import java.util.Arrays;
public class homework4_3{
	public static void main(String[] args){
		Scanner a = new Scanner(System.in);
		Stack<Integer> stack = new Stack<Integer>();
		String c = a.nextLine();
		String[] mas= c.split(" ");
		
		for(int i=0;i<mas.length;i++){
			while(stack.size()>0 && Integer.parseInt(mas[stack.peek()])<Integer.parseInt(mas[i])){
				mas[stack.pop()]=mas[i];
			}
			stack.push(i);
			//System.out.println(Arrays.toString(mas));
		}
		//System.out.println(Arrays.toString(mas));
		while(stack.size()>0){
			mas[stack.pop()]="0";
		}
		System.out.println(Arrays.toString(mas));
	}
}