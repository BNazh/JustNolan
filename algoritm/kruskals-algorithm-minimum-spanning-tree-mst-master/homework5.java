import java.util.Scanner;
public class homework5{
	public static void main(String[] args){
		Scanner a = new Scanner(System.in);
		int d = a.nextInt();
		
		int[] xt=new int[d];
		int[] yt=new int[d];
		for(int i=0;i<d;i++){
			xt[i]=a.nextInt();
			yt[i]=a.nextInt();
			
		}
		double sum=0;
		for(int j=0;j<d-1;j++){
			sum=sum+xt[j]*yt[j+1]-yt[j]*xt[j+1];
			
		}
		sum= sum+xt[d-1]*yt[0]-yt[d-1]*xt[0];
		
		//System.out.println(Math.abs(sum/2));
		double gerau=0;
		for(int s=0;s<d-2;s++){
			double x = xt[0];
			double y = yt[0];
			
			double x1=xt[s+1];
			double y1= yt[s+1];
			
			double x2 = xt[s+2];
			double y2 = yt[s+2];
			
			double disab= Math.sqrt((x1-x)*(x1-x)+(y1-y)*(y1-y));
			double disbc = Math.sqrt((x2-x1)*(x2-x1)+(y2-y1)*(y2-y1));
			double disac = Math.sqrt((x2-x)*(x2-x)+(y2-y)*(y2-y));
			
			double p = (disab+disac+disbc)/2;
			gerau+= Math.sqrt((p*(p-disab)*(p-disbc)*(p-disac)));
			
		}
		System.out.println(gerau);
	}
}