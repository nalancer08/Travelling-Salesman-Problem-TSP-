import java.util.Random;

public class main {

	public static void main(String[] args) {
		
        Point[] points = new Point[500];
        for (int i = 0; i < points.length; i++) {
        	
        	Point point = new Point(200);
        	points[i] = point;
            /*points[i] = new Point();
            points[i].x = new Random().nextInt(200);
            points[i].y = new Random().nextInt(200);*/
            System.out.println("Punto " + i + " " + point.toString());
        }

        int[] best;

        //=======================method 1=======================
        GeneticAlgorithm ga = new GeneticAlgorithm();
        best = ga.tsp(getDist(points));

        int n = 0;
        while (n++ < 100) {
            best = ga.nextGeneration();
            System.out.println("best distance:" + ga.getBestDist() +
                    " current generation:" + ga.getCurrentGeneration() +
                    " mutation times:" + ga.getMutationTimes());
            System.out.print("best path:");
            for (int i = 0; i < best.length; i++) {
                System.out.print(best[i] + " ");
            }
            System.out.println();
        }

        //=======================method 2========================
        /*GeneticAlgorithm ga2 = GeneticAlgorithm.getInstance();

        ga2.setMaxGeneration(1000);
        ga2.setAutoNextGeneration(true);
        best = ga2.tsp(getDist(points));
        System.out.print("best path:");
        for (int i = 0; i < best.length; i++) {
            System.out.print(best[i] + " ");
        }
        System.out.println();*/
    }

    private static float[][] getDist(Point[] points) {
        float[][] dist = new float[points.length][points.length];
        for (int i = 0; i < points.length; i++) {
            for (int j = 0; j < points.length; j++) {
                dist[i][j] = distance(points[i], points[j]);
                System.out.println("putno 1 == " + points[i].toString() + ", punto 2 = " + points[j].toString() );
                System.out.println("distancia == " + distance(points[i], points[j]) + "\n" );
            }
        }
        return dist;
    }

    private static float distance(Point p1, Point p2) {
        return (float) Math.sqrt((p1.x - p2.x) * (p1.x - p2.x) + (p1.y - p2.y) * (p1.y - p2.y));
    }
}
