import java.util.*;
import java.io.*;
public class Dijkstra {
	static int[][] infinity;
	static String path;
	static ArrayList<Edge> edgelist;
	static int Min = Integer.MAX_VALUE;
	static int[] minarray;
	public static void main(String[] args) throws Exception {
		File file = new File("distance.txt");
		Scanner scn = new Scanner(file);
		int a = scn.nextInt();
		int[][] matrix = new int[a][a];
		edgelist = new ArrayList<>();
		infinity = new int[a][a];
		minarray = new int[a*a];
		for (int i = 0; i < a; i++) {
			for (int j = 0; j < a; j++) {
				matrix[i][j] = scn.nextInt();
				if(matrix[i][j] != 0){
					Edge edge = new Edge(matrix[i][j],i,j);
					edgelist.add(edge);
				}
			}
		}
		Collections.sort(edgelist, (o1,o2)->{
			return o1.weight - o2.weight;
		});
		for (int i = 0; i < a; i++) {
			for (int j = 0; j < a; j++) {
				infinity[i][j] = Integer.MAX_VALUE;
			}
		}
		res(0,0,matrix,0,4);
		for (int i = 1; i < a; i++) {
			for (int j = 1; j < a; j++) {
				if(infinity[i][j] != 0){
					if(infinity[i][j] < infinity[0][j]){
						infinity[0][j] = infinity[i][j];
					}
				}
			}
		}
		for (int j = 1; j < a; j++) {
			System.out.print(infinity[0][j]+" ");
		}
		System.out.println();
	}
	static int j2 = 0;
	static void res(int i,int j1, int[][] matrix, int count,int size){
		if(edgelist.size() == 0) return ;
		for (int j = 0; j < size; j++) {
			if(matrix[j1][j] != 0 && j != i){
				if (count+matrix[j1][j] < infinity[j1][j]) {
					infinity[j1][j] = count+matrix[j1][j];
				}
			}		
		}
		int i2 = edgelist.get(0).ver1, j2 = edgelist.get(0).ver2;
		edgelist.remove(0);
		res(i2, j2, matrix, matrix[i2][j2],size);
	}

	static class Edge {
		public int ver1;
		public int ver2;
		public int weight;
		public Edge (int w, int v1, int v2){
			ver1 = v1;
			ver2 = v2;
			weight = w;
		}
		public String toString(){
			return ""+weight;
		}
	}
}